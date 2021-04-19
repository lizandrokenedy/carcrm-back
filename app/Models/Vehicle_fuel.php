<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle_fuel extends Model
{
    use HasFactory;

    protected $table = 'vehicle_fuels';

    protected $guarded = [
        'id'
    ];

    //protected $timestamps = true;

    protected $fillable = [
        'label',
        'value',
    ];
}
