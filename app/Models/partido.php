<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partido extends Model
{
    use HasFactory;
    public function gols(){
        return $this->belongsToMany('App\Models\Gol');
    }
    public function equipos(){
        return $this->hasMany('App\Models\Equipo');
    }
}
