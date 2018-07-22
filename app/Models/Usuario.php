<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public function posse(){
        return $this->belongsTo(Posse::class);
    }
}
