<?php

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

Route::get('/user/blog', [App\Http\Controllers\BlogController::class, 'userBlogs'])->name('blog.user.index');

Route::get('/view/blog/{id}', [App\Http\Controllers\BlogController::class, 'show'])->name('view.blog');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/edit/user/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
Route::post('/update/user/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');

//blogs routes
Route::get('/myblogs', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('/Blog/create', [App\Http\Controllers\BlogController::class, 'create'])->name('blog.create');
Route::post('/Blog/store', [App\Http\Controllers\BlogController::class, 'store'])->name('blog.store');
Route::get('/Blog/edit/{id}', [App\Http\Controllers\BlogController::class, 'edit'])->name('blog.edit');
Route::post('/Blog/update/{id}', [App\Http\Controllers\BlogController::class, 'update'])->name('blog.update');
Route::get('/Blog/delete/{id}', [App\Http\Controllers\BlogController::class, 'destroy'])->name('blog.delete');


