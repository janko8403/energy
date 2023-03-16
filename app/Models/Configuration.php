<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    use HasFactory;

    protected $fillable = [
        'nazwaOdbiorcy',
        'mocUmowna',
        'typKlienta',
        'area_id',
        'pv_id',
    ];

    public $timestamps = false;

    public function measurement_one_minute()
    {
        return $this->hasMany(MeasurementOneMinute::class);
    }


    public function area()
    {
        return $this->hasOne(Area::class, 'id');
    }

    public function pv()
    {
        return $this->hasOne(Pv::class, 'id');
    }
}
