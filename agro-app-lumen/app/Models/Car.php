<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','price', 'cylinder_capacity', 'fuel_type','automatic_speed','bluetooth'
    ];

    public static function query($query = ''){
        if(!$query){
            return self::all();
        }
        return self::where('price', 'like',"%$query%")
            ->orWhere('cylinder_capacity', 'like', "%$query%")
            ->orWhere('fuel_type', 'like', "%$query%")
            ->orWhere('automatic_speed', 'like', "%$query%")
            ->orWhere('bluetooth', 'like', "%$query%")
            ->get();
    }

    public function mark(){
        return $this->hasMany('App\Models\Mark');
    }
}
