<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeasurementOneMinute extends Model
{
    use HasFactory;

    protected $fillable = [
        'device_id',
        'client_id',
        'last_voltage_l1',
        'last_voltage_l2',
        'last_voltage_l3',
        'last_power_value',
        'last_power_set_active',
        'last_frequency',
        'energy_data',
        'requested_timestamp',
    ];

    public function configuration()
    {
        return $this->belongsTo(Configuration::class);
    }
}
