<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carta_subtipo extends Model
{
    public function carta(){
        return $this->belongsTo(Carta::class);
    }
    public function subtipo(){
        return $this->belongsTo(Subtipo::class);
    }
}
