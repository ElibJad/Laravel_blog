<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentaireController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('articles', ArticleController::class);

Route::resource('users', UserController::class);

Route::middleware('guest')->group(function(){
    Route::get('/login',[LoginController::class, 'show'])->name('login.show');
    Route::post('/login',[LoginController::class, 'login'])->name('login');
});

Route::get('/logout',[LoginController::class, 'logout'])->name('login.logout');

// Route::name('commentaires.')->prefix('commentaires')->group(function(){
//     Route::controller(CommentaireController::class)->group(function(){
//         Route::post('/','store')->name('store');
//         Route::delete('/{commentaire}','destroy')->name('destroy');
//     });
// });
Route::resource('commentaires', CommentaireController::class);