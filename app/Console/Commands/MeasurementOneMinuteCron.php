<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\{Configuration, Pv, MeasurementOneMinute};
use App\Classes\GetDataApi;

class MeasurementOneMinuteCron extends Command
{

    public function __construct(GetDataApi $getDataApi) {
        parent::__construct($getDataApi);
        $this->getDataApi = $getDataApi;
    }

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'measurement_1:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        info("Cron Job running at ". now()); 

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

                $last_power_value = 0;
                if(array_key_exists('last_power_value', $response)) {
                    $last_power_value = $response['last_power_value'];
                }
                if(array_key_exists('e_value', $response)) {
                    $last_power_value = $response['e_value'];
                }

                $last_power_set_active = '0%';
                if(array_key_exists('last_power_set_active', $response)) {
                    $last_power_set_active = $response['last_power_set_active'];
                }

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

        // return Command::SUCCESS;
    }
}
