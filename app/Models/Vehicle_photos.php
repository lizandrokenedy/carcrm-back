<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle_photos extends Model
{
    use HasFactory;


    protected $table = 'vehicle_photos';

    protected $guarded = [
        'id'
    ];

    protected $timestamps = true;

    protected $fillable = [
        "user_id",
        "vehicle_id",
        "img",
        "order",
    ];
}
