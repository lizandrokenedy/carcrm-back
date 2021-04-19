<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle_brand extends Model
{
    use HasFactory;

    protected $table = 'vehicle_brands';

    protected $timestamps = true;

    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        "label",
        "value",
        "vehicle_type_id",
    ];
}
