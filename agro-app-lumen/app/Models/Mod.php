<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mod extends Model
{

    use HasFactory;

    protected $fillable = [
        'name', 'videos','photos'
    ];

    public function version(){
        return $this->hasMany('App\Models\Version');
    }

    public function mark(){
        return $this->belongs('App\Models\Mark');
    }
}
