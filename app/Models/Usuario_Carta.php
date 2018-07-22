<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario_Carta extends Model
{
    protected $table = "usuario_cartas";

    public function carta(){
        return $this->belongsTo(Carta::class);
    }
    public function edicao(){
        return $this->belongsTo(Edicao::class);
    }
    public function usuario(){
        return $this->belongsTo(Usuario::class);
    }
    public function posse_usuario(){
        return $this->belongsTo(Usuario::class, 'posse');
    }
    public function estado(){
        return $this->belongsTo(Estado::class);
    }
    public function lingua(){
        return $this->belongsTo(Lingua::class);
    }
}
