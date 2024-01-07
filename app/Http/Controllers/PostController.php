<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registro = DB::table('posts')
            ->join('usuarios', 'posts.usuario_id', '=', 'usuarios.id')
            ->select('posts.*', 'usuarios.izena as usuario_izena')
            ->get();
            
        $usuarios = DB::table('usuarios')->get();

        return view("post", ["registro" => $registro, "usuarios" => $usuarios]);
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
            "title"=>$request->input("title"),
            "descripcion"=>$request->input("descripcion"),
            "usuario_id"=>$request->input("user")
        ]);

        return $this->index();
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

    public function getPostsByUserId($user_id)
    {
        $userPosts = DB::table("posts")->where("usuario_id", $user_id)->orderBy('title')->get();

        return view("userPosts", ["posts" => $userPosts]);
    }

    public function getRecentPosts()
    {
        $recentPosts = Post::orderBy('created_at', 'desc')->take(12)->get();
        return view("recentPosts", ["posts" => $recentPosts]);
    }
}
