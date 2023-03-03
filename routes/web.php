<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!

@foreach($posts as $post)
                    {{$post->title}}
                    {{$post->body}}
                    <br>
                    @endforeach
                    {{$posts->links()}}
|
*/

Route::get('/', [HomeController::class,'show_post'])->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/post',[PostController::class,'index'])->name('post_index');
Route::post('/post',[PostController::class,'create'])->name('post_create');
    Route::get('/dashboard',[DashboardController::class, 'show_post'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/post/edit/{id}',[PostController::class,'edit'])->name('post_edit');
    Route::put('/post/edit/{id}',[PostController::class,'update'])->name('post_update');
    Route::get('/post/delete/{id}',[PostController::class,'destroy'])->name('post_destroy');
});

require __DIR__.'/auth.php';