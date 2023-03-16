<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = [
        'area',
    ];

    public $timestamps = false;

    public function configuration()
    {
        return $this->belongsTo(Configuration::class, 'area_id');
    }
}
