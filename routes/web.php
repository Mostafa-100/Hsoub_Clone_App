<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\Authenticate;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $show_last_comments = true;
    $posts = Post::all();
    return view('main-page.main', compact('show_last_comments', 'posts'));
})->name('main.show');

Route::get('/posts/create', [PostController::class, 'create'])
    ->name('posts.create')
    ->middleware(Authenticate::class);;

Route::post('/posts', [PostController::class, 'store'])
    ->name('posts.store');

Route::get('/posts/{post}', [PostController::class, 'show'])
    ->where('id', '[0-9]+')
    ->name('posts.show');

Route::get('/register', [RegisterController::class, 'showRegistrationForm']);
Route::post('/register', [RegisterController::class, 'registerUser'])->name('register');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [loginController::class, 'logUser']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
