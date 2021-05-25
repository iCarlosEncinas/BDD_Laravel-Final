<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complejo extends Model
{
    use HasFactory;

    public function sede(){
        return $this->belongsTo('App\Models\Sede');
    }

    public function deportivo(){
        return $this->belongsTo('App\Models\Deportivo');
    }

    public function evento(){
        return $this->hasMany('App\Models\Evento');
    }
}
