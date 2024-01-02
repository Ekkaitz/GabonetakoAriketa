<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuario;
use App\Http\Controllers\Direccion;
use App\Http\Controllers\Esleitu;
use App\Http\Controllers\PostController;
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

Route::get('/post', [PostController::class,"index"]);
Route::get('/post/gorde', [PostController::class,"store"]);
Route::get('/post/editatu', [PostController::class,"editatu"]);
Route::get('/post/update', [PostController::class,"update"]);
Route::get('/post/ezabatu/{id}', [PostController::class,"destroy"]);

Route::get('/api/posts/recent', [PostController::class, 'getRecentPosts']);
Route::get('/api/posts/{user_id}', [PostController::class, 'getPostsByUserId']);
