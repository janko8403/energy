<?php

namespace App\Incoming;

use App\Models\{MeasurementOneHour, Configuration};
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;;


class GetOneHour implements ActionInterface
{

    // public function execute($data)
    // {
    //     $date = Carbon::createFromFormat('Y-m-d', $data->to);
    //     $to = $date->addDays(1);

    //     $arrMeasurement = [];
    //     foreach($data->clients[0] as $client) {

    //         $type = MeasurementOneHour::where(['client_id' => $client])->first();
    //         if ($type != NULL) {
    //             $getDate = MeasurementOneHour::select(
    //                 DB::raw("SUM(last_power_value) as count"),
    //                 "configurations.nazwaOdbiorcy as client_name",
    //                 "requested_timestamp as timestamp"
    //             )
    //             ->leftJoin("configurations", "configurations.id", "=", "measurement_one_hours.client_id")
    //             ->whereBetween('created_at', [$data->from, $to])
    //             ->where('client_id', $type->client_id)
    //             ->get();

    //             if ($getDate->isNotEmpty()) {
    //                 $arrMeasurement[] = $getDate;
    //             }
    //         }

    //     }

    //     return $arrMeasurement;
    // }

    public function execute($data)
    {
        $date = Carbon::createFromFormat('Y-m-d', $data->to);
        $to = $date->addDays(1);

        $arrClient = [];
        foreach($data->clients as $client) {
            $arrClient[] = $client;
        }

        $sums = MeasurementOneHour::select(
            "requested_timestamp as timestamp",
            DB::raw("SUM(last_power_value) as count")
        )
        ->whereBetween('requested_timestamp', [$data->from, $to])
        ->whereIn('client_id', $arrClient)
        ->groupBy('requested_timestamp')
        ->get();

        $arrS = [];
        foreach($sums as $s) {
            $vals = MeasurementOneHour::select(
                "last_power_value as power",
            )
            ->where('requested_timestamp', $s->timestamp)
            ->whereIn('client_id', $arrClient)
            ->get();
            $r = [];
            foreach($vals as $v) {
                $r[] = $v['power'];
            }
            $arrS[] = array_merge([$s->timestamp], $r, [$s->count]);
        }
        return $arrS;
    }

    public function heading($data)
    {
        $date = Carbon::createFromFormat('Y-m-d', $data->to);
        $to = $date->addDays(1);

        $arrClient = [];
        foreach($data->clients as $client) {
            $getUser = MeasurementOneHour::select(
                "client_id"
            )
            ->whereBetween('requested_timestamp', [$data->from, $to])
            ->where('client_id', $client)
            ->groupBy('requested_timestamp')
            ->get();

            if ($getUser->isNotEmpty()) {
                $arrClient[] = $getUser;
            }
        }

        $arrC = [];
        foreach($arrClient as $key => $client) {
            foreach($arrClient[$key] as $c) {
                $arrC[$key] = $c['client_id'];
            }
        }

        $arrH = [];
        foreach($arrC as $client) {
            $c = Configuration::findOrFail($client);
            $arrH[] = $c->nazwaOdbiorcy;
        }

        return array_merge(['Data'], $arrH, ['Suma']);
    }
}