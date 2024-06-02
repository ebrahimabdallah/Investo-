<?php

use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\UserController;

 


 use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('admin.home');
});


Route::get('posts',[PostsController::class, 'index']);

Route::get('users',[UserController::class, 'index']);
 

Route::get('posts/{status}',[PostsController::class, 'status']);
