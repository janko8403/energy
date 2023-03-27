<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stevebauman\Purify\Facades\Purify;
use App\Http\Requests\ClientRequest;
use App\Repositories\Interfaces\AdminRepositoryInterface;
use DataTables;
use Illuminate\Validation\Rule;
use App\Enums\ActionMeasurement;
use App\Incoming\Factory;
use Redirect;
use App\Exports\MeasurementExport;
use Maatwebsite\Excel\Facades\Excel;

use App\Models\{Configuration, Log, Pv, Area, MeasurementOneMinute, MeasurementFifteenMinute, MeasurementOneHour};
use App\Classes\GetDataApi;

class AdminController extends Controller
{
    public function __construct(
        private readonly AdminRepositoryInterface $adminRepository,
        private readonly ClientRequest $clientRequest,
        private readonly GetDataApi $getDataApi,
        private Factory $factory
    )
    {
        $this->factory = $factory;    
    }

    public function suma()
    {
        return view('admin.suma');
    }

    public function przywidz()
    {
        $clients = $this->adminRepository->getNameByClient();
        $clients_with_relations = $this->adminRepository->getyClientWithRelations();
        // dd($clients);
        return view('admin.przywidz', compact('clients', 'clients_with_relations'));
    }

    public function mlawa()
    {
        return view('admin.mlawa');
    }

    public function client(Request $request)
    {
        if ($request->ajax()) {
            $data = $this->adminRepository->getClients();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('area', function ($row) {
                        return $this->adminRepository->getArea($row->area_id);
                    })
                    ->addColumn('generacja', function ($row) {
                        return $this->adminRepository->getPvGeneration($row->pv_id);
                    })
                    ->addColumn('adres', function ($row) {
                        return $this->adminRepository->getPvIp($row->pv_id);
                    })
                    ->addColumn('action', function($row){

                            $btn = '
                                <a data-edit="'.$row->id.'" class="icon mr-2 cursor-pointer edit-client" data-toggle="modal" data-target="#edit-client"><i class="mdi mdi-edit edit-color"></i></a>
                                <a data-delete="'.$row->id.'" class="icon cursor-pointer delete-link" data-toggle="modal" data-target="#delete-client"><i class="mdi mdi-delete delete-color"></i></a>';
    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('admin.clients');
    }

    public function addClient(Request $request)
    {
        $validated = $this->clientRequest->validate($request->all());
        //xss protection!
        // $cleaned = Purify::clean($validated);
        return response()->json($this->adminRepository->createClient($validated));
    }

    public function editClient(Request $request)
    {
        $validated = $this->clientRequest->validate($request->all());
        return response()->json($this->adminRepository->updateClient($validated, $request->id, $request->pv_id));
    }

    public function removeClient($id)
    {
        $this->adminRepository->deleteClient($id);
        return response()->json('Poprawnie usunąłeś klienta');
    }

    public function measurement()
    {
        $clients = $this->adminRepository->getNameByClient();
        return view('admin.measurement', compact('clients'));
    }

    public function filterMeasurement(Request $request)
    {
        $validated = $request->validate([
            'from' => 'required|date',
            'to' => 'required|date|after:from',
            'clients' => 'required',
            'resolution' => ['required', Rule::in(array_map(fn($a) => $a->value, ActionMeasurement::cases()))]
        ],['from.required' => 'Data od jest wymagane', 'to.required' => 'Data do jest wymagane', 'to.after' => 'Data do musi byc większa niż Data od', 'clients.required' => 'Wybierz klienta', 'resolution.in' => 'Wybrana rozdzielczośc jest nieprawidłowa', 'resolution.required' => 'Wybierz rozdzielczość']);
        
        return Excel::download(new MeasurementExport($request), 'measurement-'.date('Y-m-d').'.xlsx');
    }

    // public function filterMeasurement(Request $request)
    // {
    //     $validated = $request->validate([
    //         'from' => 'required|date',
    //         'to' => 'required|date|after:from',
    //         'clients.*' => 'required',
    //         'resolution' => ['required', Rule::in(array_map(fn($a) => $a->value, ActionMeasurement::cases()))]
    //     ],['from.required' => 'Data od jest wymagane', 'to.required' => 'Data do jest wymagane', 'to.after' => 'Data do musi byc większa niż Data od', 'clients.0.required' => 'Wybierz klienta', 'resolution.in' => 'Wybrana rozdzielczośc jest nieprawidłowa', 'resolution.required' => 'Wybierz rozdzielczość']);

    //     $action = $this->factory->create(ActionMeasurement::from($validated['resolution']));
    //     $data = $action->execute($request);

    //     return $data;
    // }

    public function logs()
    {
        $logs = $this->adminRepository->getLogs();
        return view('admin.logs', compact('logs'));
    }

    public function cron()
    {
        $configurations = Configuration::all();
        $date_timestamp = date("Y-m-d H:i:s");
        foreach ($configurations as $value) {

            if($value->id != 99) {
                $pv = Pv::where(['id' => $value->pv_id])->first();
                $response = $this->getDataApi->getDataDevice($value->id, $pv->adres);
                
                $idDevice = $pv->adres;
                $idClient = $value->id;
                
                $last_voltage_l1 = 0;
                $last_voltage_l2 = 0;
                $last_voltage_l3 = 0;

                if(array_key_exists('last_voltage_L1', $response)) {
                    $last_voltage_l1 = $response['last_voltage_L1'];
                }
                if(array_key_exists('tag_L1', $response)) {
                    $last_voltage_l1 = $response['tag_L1'];
                }

                if(array_key_exists('last_voltage_L2', $response)) {
                    $last_voltage_l2 = $response['last_voltage_L2'];
                }
                if(array_key_exists('tag_L2', $response)) {
                    $last_voltage_l2 = $response['tag_L2'];
                }

                if(array_key_exists('last_voltage_L3', $response)) {
                    $last_voltage_l3 = $response['last_voltage_L3'];
                }
                if(array_key_exists('tag_L3', $response)) {
                    $last_voltage_l3 = $response['tag_L3'];
                }

                // dd($last_voltage_l3);

                $last_power_value = 0;
                if(array_key_exists('last_power_value', $response)) {
                    $last_power_value = $response['last_power_value'];
                }
                if(array_key_exists('e_value', $response)) {
                    $last_power_value = $response['e_value'];
                }

                // dd($response);
                $last_power_set_active = '0%';
                if(array_key_exists('last_power_set_active', $response)) {
                    $last_power_set_active = $response['last_power_set_active'];
                }
                // $last_power_set_active = $response['last_power_set_active'];

                $last_frequency = 0;
                if(array_key_exists('last_frequency_value', $response)) {
                    $last_frequency = $response['last_frequency_value'];
                }
                if(array_key_exists('quenc_value', $response)) {
                    $last_frequency = $response['quenc_value'];
                }
                $energy_data = 0;
                if(array_key_exists('energy_data_value', $response)) {
                    $energy_data = $response['energy_data_value'];
                }
                if(array_key_exists('at_value', $response)) {
                    $energy_data = $response['at_value'];
                }

                try {
                    MeasurementOneMinute::query()->create(
                        [
                            'device_id' => $value->pv_id,
                            'client_id' => $value->id,
                            'last_voltage_l1' => $last_voltage_l1,
                            'last_voltage_l2' => $last_voltage_l2,
                            'last_voltage_l3' => $last_voltage_l3,
                            'last_power_value' => $last_power_value / 1000,
                            'last_power_set_active' => $last_power_set_active,
                            'last_frequency' => $last_frequency,
                            'energy_data' => $energy_data,
                            'requested_timestamp' => $date_timestamp
                        ]
                    );
                } catch (\PDOException $th) {
                    throw $th;
                    var_dump($th);
                }
            }

        }
    }

    public function getcron() 
    {
        return MeasurementOneMinute::all();
        // return MeasurementFifteenMinute::all();
        // return MeasurementOneHour::all();
    }

    public function lastPowerValue()
    {
        return $this->adminRepository->getPowerValue();
    }

    public function lastDateValue()
    {
        return $this->adminRepository->getLabelDate();
    }

    public function setPv(Request $request)
    {
        $device = $this->adminRepository->setDevice($request);
        return response()->json($device);
    }
}
