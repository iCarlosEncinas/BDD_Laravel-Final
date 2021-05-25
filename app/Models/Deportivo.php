<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deportivo extends Model
{
    use HasFactory;

    public function complejos(){
        return $this->hasOne('App\Models\Complejo');
    }
}
