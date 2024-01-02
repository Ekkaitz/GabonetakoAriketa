<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function usuarios(){
        return $this->hasMany('App\Models\Usuario');
    }

    public function temas(){
        return $this->belongsToMany('App\Models\Tema_Post');
    }

}
