<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Post extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registro= DB::table("posts")->get();

        return view("post",["registro" =>$registro]);
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
        DB::table('posts')->insert([
            "descripcion"=>$request->input("descripcion")
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

   
    public function editatu (Request $request) {

        $id=$request->input("id");
        $descripcion=$request->input("descripcion");
        return view("postEditatu", ['descripcion'=>$descripcion,'id'=> $id ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        DB::table("posts")
        ->where("id", $request->input("id"))
        ->update(["descripcion"=>$request->input("descripcion")]);
        
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table("posts")->where('id', $id)->delete();
        return $this->index();
    }
}
