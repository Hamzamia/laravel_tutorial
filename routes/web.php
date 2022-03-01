<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user',[userController::class,'index']);
// Route::get('login',[loginController::class,'index'])->name('login.index');
// Route::post('login',[loginController::class,'loginSubmit'])->name('login.submit');


Route::get('login',[LoginController::class,'index'])->name('login.index');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login.submit');
Route::get('/posts',[PostController::class,'getAllPost'])->name('post.getAllpost');
Route::get('/add-post',[PostController::class,'addPost'])->name('add.post');

// Route::get('/session/get',[sessionController::class,'getSession'])->name('session.get');
// Route::get('/session/set',[sessionController::class,'storeData'])->name('session.store');
// Route::get('/session/remove',[sessionController::class,'removeData'])->name('session.delete');




// Route::get('/session/get',[sessionController::class,'getSession'])->name('session.get');
// Route::get('/session/set',[sessionController::class,'storeData'])->name('session.store');
// Route::get('/session/remove',[sessionController::class,'removeData'])->name('session.delete');