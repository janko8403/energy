<?php

namespace App\Repositories\Repositories;

use App\Models\{Configuration, Area, Pv, Log, MeasurementOneMinute, MeasurementFifteenMinute, MeasurementOneHour};
use App\Repositories\Interfaces\AdminRepositoryInterface;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AdminRepository implements AdminRepositoryInterface
{

    private $model;

    public function createClient(array $data)
    {
        $pv_id = Pv::query()->create(
            [
                ...$data,
            ]
        );
        Configuration::query()->create(
            [
                ...$data,
                'pv_id' => $pv_id->id,
            ]
        );
    }

    public function updateClient(array $data, int $id, int $pv_id)
    {
        $pv = Pv::find($pv_id);
        $pv->fill($data)->save();

        $client = Configuration::find($id);
        $client->fill($data)->save();
        return ['status' => 200];
    }

    public function deleteClient($id)
	{
        $id = Configuration::find($id);
        Pv::where('id', $id->pv_id)->delete();
        MeasurementOneMinute::whereIn('client_id',$id)->delete();
        MeasurementFifteenMinute::whereIn('client_id',$id)->delete();
        MeasurementOneHour::whereIn('client_id',$id)->delete();
        Configuration::where('id', $id)->delete();

		return ['status' => 200];;
	}

    public function getClients()
    {
        return Configuration::all();
    }

    public function getArea(int $id)
    {
        $a = Area::find($id);
        return $a->area;
    }

    public function getPvGeneration(int $id)
    {
        $pv = Pv::find($id);
        return $pv->generacja;
    }

    public function getPvIp(int $id)
    {
        $pv = Pv::find($id);
        return $pv->adres;
    }

    public function getLogs()
    {
        return Log::all();
    }

    public function getPowerValue()
    {
        $configurations = Configuration::all();

        $date = Carbon::now()->subHour(12);

        $arrMeasurement = [];
        foreach ($configurations as $value) {
    
            $measurement = MeasurementOneMinute::select(
                    // "configurations.id as client_id",
                    "configurations.nazwaOdbiorcy as client_name",
                    "measurement_one_minutes.last_power_value",
                    // "measurement_one_minutes.requested_timestamp" 
                )
                ->leftJoin("configurations", "configurations.id", "=", "measurement_one_minutes.client_id")
                ->where('created_at', '>=', $date)
                ->where('client_id', $value->id)
                ->whereNotNull(['requested_timestamp', 'last_power_value'])
                ->orderBy('created_at', 'DESC')
                ->limit(5)
                ->get();

            if ($measurement->isNotEmpty()) {
                $arrMeasurement[] = $measurement;
            }

        }

        return $arrMeasurement;
    }

    public function getLabelDate()
    {
        $date = Carbon::now()->subHour(12);

        $configurations = Configuration::all();

        $arrDate = [];
        foreach ($configurations as $value) {
            $getDate = MeasurementOneMinute::select(
                    "configurations.id as client_id",
                    "measurement_one_minutes.requested_timestamp" 
                )
                ->leftJoin("configurations", "configurations.id", "=", "measurement_one_minutes.client_id")
                ->where('created_at', '>=', $date)
                ->where('client_id', $value->id)
                ->whereNotNull(['requested_timestamp', 'last_power_value'])
                ->orderBy('created_at', 'ASC')
                ->limit(10)
                ->get();

                if ($getDate->isNotEmpty()) {
                    $arrDate[] = $getDate;
                }

        }

        return $arrDate;
    }

    public function getNameByClient()
    {
        $clients = Configuration::select(
                'id',
                'nazwaOdbiorcy'
            )
            // ->limit(5)
            ->get();
        return $clients;
    }

    public function getyClientWithRelations()
    {
        $clients = Configuration::select(
                'configurations.id',
                'nazwaOdbiorcy',
                'mocUmowna',
                'areas.area as area',
                'pvs.generacja as generacja'
            )
            ->leftJoin("areas", "areas.id", "=", "configurations.area_id")
            ->leftJoin("pvs", "pvs.id", "=", "configurations.pv_id")
            ->get();
        
        return $clients;
    }

    public function setDevice($data)
    {
        dd($data);
    }
}
