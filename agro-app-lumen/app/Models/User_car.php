<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_car extends Model
{
    protected $fillable = [
        'name','price', 'cylinder_capacity', 'fuel_type','automatic_speed','bluetooth'
    ];


    public function user(){
        return $this->HasMany('App\Models\User');
    }
    public function car(){
        return $this->HasMany('App\Models\Car');
    }
}
