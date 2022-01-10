<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    use HasFactory;

    protected $fillable = [
        'version_name','price','cylinder_capacity','fuel_type','automatic_speed','bluetooth'
    ];

    public function mod(){
        return $this->belongsTo(Mod::class);
    }
}
