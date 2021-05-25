<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comisario extends Model
{
    use HasFactory;

    public function evento(){
        return $this->belongsTo('App\Models\Evento');
    }
}
