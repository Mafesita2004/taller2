<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class presidente extends Model
{
    use HasFactory;
    public function equipos(){
        return $this->hasOne('App\Models\Equipo');
    }
}
