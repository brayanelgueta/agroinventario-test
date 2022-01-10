<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'logo'
    ];

    public function model(){
        return $this->hasMany('App\Models\Mod');
    }

    public function car(){
        return $this->belongsTo('App\Models\Car');
    }


}
