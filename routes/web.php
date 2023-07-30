<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;

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
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/network', [PostController::class, 'viewPost'])->name('network');

    Route::get('/dashboard', [UserController::class, 'counting'])->name('dashboard');

    Route::prefix('dashboard')->group(function() {
        Route::resource('users', UserController::class);
        // Route::controller(UserController::class)->group(function() {
        //     Route::name('users.')->group(function() {
        //         Route::get('/users', 'index')->name('index');
        //         Route::post('/users/store', 'store')->name('store');
        //     });
        // });

        Route::resource('posts', PostController::class);
        Route::controller(PostController::class)->group(function() {
            Route::name('posts.')->group(function() {
                Route::patch('/posts/post_status/{post}', 'changeStatus')->name('changeStatus');
                Route::patch('/posts/change_status/{post}', 'changeStatus1')->name('changeStatus1');
                Route::delete('/posts/delete/{post}', 'destroy1')->name('destroy1');
            });
        });

        Route::resource('comments', CommentController::class);
        Route::controller(CommentController::class)->group(function() {
            Route::name('comments.')->group(function() {
                Route::patch('/comments/comment_status/{comment}', 'changeStatus')->name('changeStatus');
                Route::patch('/comments/change_status/{comment}', 'changeStatus1')->name('changeStatus1');
                Route::delete('/comments/delete/{comment}', 'destroy1')->name('destroy1');
            });
        });
    });
});
