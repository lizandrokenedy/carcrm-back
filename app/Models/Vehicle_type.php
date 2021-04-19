<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle_type extends Model
{
    use HasFactory;


    protected $table = 'vehicle_types';

    protected $guarded = [
        'id'
    ];

    //protected $timestamps = true;

    protected $fillable = [
        'label',
        'value',
    ];
}
