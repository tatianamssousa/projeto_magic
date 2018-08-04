<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carta_tipo extends Model
{
    public function carta(){
        return $this->belongsTo(Carta::class);
    }
    public function tipo(){
        return $this->belongsTo(Tipo::class);
    }
}
