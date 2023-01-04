<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; // 外部にあるPostControllerクラスをインポート
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;

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

Route::controller(PostController::class)->middleware(['auth'])->group(function() {
    Route::get('/', 'index')->name('index');
    Route::post('/posts', 'store')->name('store');
    Route::get('/posts/create', 'create')->name('create');
    Route::get('/posts/{post}', 'show')->name('show');
    Route::delete('/posts/{post}', 'delete')->name('delete');
    Route::get('/posts/{post}/edit', 'edit')->name('edit');
    Route::put('/posts/{post}', 'update')->name('update');
    Route::get('/categories/{category}', [CategoryController::class,'index']);
    Route::get('/user/{user}', [UserController::class, 'index']);
});

Route::controller(ContactController::class)->middleware(['auth'])->group(function() {
    // 入力フォームページ
    Route::get('/contact', 'index')->name('contact');
    // 確認フォームページ
    Route::post('/contact/confirm', 'confirm')->name('contact.confirm');
    // 送信完了ページ
    Route::post('/contact/thanks', 'send')->name('contact.thanks');
    // お問い合わせ投稿表示
    Route::get('/contact/show', 'show')->name('contact.show');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
