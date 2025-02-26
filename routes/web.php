<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
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
*/

Route::get('/', function () {
    return view('welcome'); 
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/posts', [PostController::class, 'index']);
    
    Route::get('/posts/complete', [PostController::class , 'complete']);

    Route::get('/posts/create', [PostController::class, 'create']);

    Route::get('/posts/categorize', [PostController::class, 'index_categorize_page']);//カテゴリー作成ページに遷移する

    Route::post('/posts/categorize', [PostController::class, 'store_new_category']);//新しく作成したカテゴリーを保存する

    Route::post('/posts', [PostController::class, 'store']);

    Route::get('/posts/{post}', [PostController::class ,'show']);

    Route::post('/posts/{post}/check', [PostController::class, 'check']);

    Route::post('/posts/{post}/back', [PostController::class, 'back']);

    Route::delete('/posts/{post}/delete', [PostController::class, 'delete']);
});

require __DIR__.'/auth.php';