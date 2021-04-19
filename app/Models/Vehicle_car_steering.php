<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle_car_steering extends Model
{
    use HasFactory;

    protected $table = 'vehicle_car_steerings';

    protected $timestamps = true;

    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        "label",
        "value",
    ];
}
