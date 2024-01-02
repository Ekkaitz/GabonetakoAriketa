<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    public function post(){
        return $this->hasMany('App\Models\Post');
    } 

    public function direccion()
    {
        return $this->hasOne(Direccione::class, 'id_usuario');
    }
}
