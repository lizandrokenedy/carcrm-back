<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle_features extends Model
{
    use HasFactory;

    protected $table = 'vehicle_features';

    protected $guarded = [
        'id'
    ];

    //protected $timestamps = true;

    protected $fillable = [
        'label',
        'value',
        'vehicle_type_id',
    ];
}
