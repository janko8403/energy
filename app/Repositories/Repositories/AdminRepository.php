<?php

namespace App\Repositories\Repositories;

use App\Models\{Configuration, Area, Pv, Log, MeasurementOneMinute, MeasurementFifteenMinute, MeasurementOneHour};
use App\Repositories\Interfaces\AdminRepositoryInterface;
use Auth;
use Carbon\Carbon;

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

    public function getPowerValue(int $id)
    {
        $date = Carbon::now()->subHour(3);
    
        $measurements = MeasurementOneMinute::select(
                "measurement_one_minutes.requested_timestamp", 
                "measurement_one_minutes.last_power_value",
                "configurations.nazwaOdbiorcy as client_name",
                "configurations.id as client_id"
            )
            ->leftJoin("configurations", "configurations.id", "=", "measurement_one_minutes.client_id")
            ->where('created_at', '>=', $date)
            ->where('client_id', $id)
            ->orderBy('created_at')
            ->get();

        return $measurements;
    }
}
