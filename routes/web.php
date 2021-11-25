<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::resource('post', PostController::class);

Route::group(['middleware'=>['can:edit-a-post'], 'as'=>'post.', 'prefix'=>'post'], function(){
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::get('/{id}', [PostController::class, 'show'])->name('show');
    Route::delete('/{id}', [PostController::class, 'destroy'])->name('destroy');
    Route::get('/{id}/edit', [PostController::class, 'edit'])->name('edit');
});