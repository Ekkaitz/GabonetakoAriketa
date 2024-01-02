<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Usuario extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $usuario= DB::table('usuarios')->get();

        return view('erabiltzaileaGehitu', ['usuario'=> $usuario]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table("usuarios")->insert([
            "izena"=>$request->input("nombre"),
            "abizena"=>$request->input("apellido")
        ]);

        return $this->index();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request )
    {   

        DB::table("usuarios")
        ->where("id", $request->input("id"))
        ->update(["izena"=>$request->input("nombre"),"abizena"=>$request->input("apellido")]);
        
        return $this->index();
    }

    public function editatu (Request $request) {

        $izena=$request->input("izena");
        $abizena=$request->input("abizena");
        $id=$request->input("id");
        return view("erabiltzaileaEditatu", ['izena'=>$izena, 'abizena'=> $abizena,'id'=> $id ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table("usuarios")->where('id', $id)->delete();
        return $this->index();
    }
}
