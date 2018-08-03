<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nome extends Model
{
    public function carta(){
        return $this->belongsTo(Carta::class);
    }
    public function lingua(){
        return $this->belongsTo(Lingua::class);
    }
}
