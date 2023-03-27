<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pv extends Model
{
    use HasFactory;

    protected $fillable = [
        'generacja',
        'adres',
    ];

    public $timestamps = false;

    public function configuration()
    {
        return $this->belongsTo(Configuration::class, 'pv_id');
    }
}
