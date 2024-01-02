<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuario;
use App\Http\Controllers\Direccion;
use App\Http\Controllers\Esleitu;
use App\Http\Controllers\Post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


Route::get('/', function () {
    return view('erabiltzaileaGehitu');
});

*/

Route::get('/', [Usuario::class, 'index']);
Route::get('/gorde', [Usuario::class, 'store']);
Route::get('/ezabatu/{id}',[Usuario::class, 'destroy' ]);
Route::get('/editatu', [Usuario::class, "editatu"]);
Route::get('/update', [Usuario::class, "update"]);

Route::get('/helbidea/esleitu', [Esleitu::class, "index"]);
Route::get('/esleitu', [Esleitu::class, "esleitu"]);

Route::get('/helbidea', [Direccion::class,"index"]);
Route::get('/helbidea/gorde', [Direccion::class,"store"]);
Route::get('/helbidea/editatu', [Direccion::class,"editatu"]);
Route::get('/helbidea/update', [Direccion::class,"update"]);
Route::get('/helbidea/ezabatu/{id}', [Direccion::class,"destroy"]);
Route::get('/helbidea/berria', function(){ return view("helbideaSortu");});

Route::get('/post', [Post::class,"index"]);
Route::get('/post/gorde', [Post::class,"store"]);
Route::get('/post/editatu', [Post::class,"editatu"]);
Route::get('/post/update', [Post::class,"update"]);
Route::get('/post/ezabatu/{id}', [Post::class,"destroy"]);
