<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gol extends Model
{
    use HasFactory;
    public function jugadors(){
        return $this->belongsToMany('App\Models\Jugador');
    }
    public function partidos(){
        return $this->hasMany('App\Models\Partido');
    }
}
