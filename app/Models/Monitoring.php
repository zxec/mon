<?php

namespace App\Models;

use App\Models\Skdesk\City;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Monitoring extends Model
{
    use HasFactory;
    protected $filalble =[
        'city_id',
        'city', 
        'street', 
        'house_number', 
        'latitude', 
        'longitude', 
        'entrance', 
        'floor', 
        'number_of_stickers', 
        'competitor', 
        'master_id', 
        'master',
        'date',
        'apply_id'
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
