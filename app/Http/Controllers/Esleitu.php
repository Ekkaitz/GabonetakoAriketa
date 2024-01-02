<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Direccione;
use Illuminate\Http\Request;

class Esleitu extends Controller
{
    public function index(){
        $direcciones = Direccione::all();
        $usuarios = Usuario::all();

        return view("helbideaEsleitu", ["helbideak" => $direcciones, "usuarios" => $usuarios]);
    }

    public function esleitu(Request $request){
        $id_usuario = $request->input("usuario");
        $direccion_id = $request->input("helbidea");

        $direccion = Direccione::find($direccion_id);
        $direccion->usuario()->associate(Usuario::find($id_usuario));
        $direccion->save();

        return $this->index();
    }
}

