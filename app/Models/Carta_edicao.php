<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carta_edicao extends Model
{
    protected $table = "cartas_edicoes";
    public function carta(){
        return $this->belongsTo(Carta::class);
    }
    public function ilustrador(){
        return $this->belongsTo(Ilustrador::class);
    }
    public function edicao(){
        return $this->belongsTo(Edicao::class);
    }
}
