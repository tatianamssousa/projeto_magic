<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carta_supertipo extends Model
{
    public function carta(){
        return $this->belongsTo(Carta::class);
    }
    public function supertipo(){
        return $this->belongsTo(Supertipo::class);
    }
}
