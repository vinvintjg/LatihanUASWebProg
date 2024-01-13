<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
Route::middleware('auth')->group(function(){
    //home
    Route::get('/', [BookController::class,'getHome'])->name('getHome');
    //detail-book
    Route::get('/book/{id}', [BookController::class,'getHomeDetailById'])->name('getHomeDetailById');
    // tampilan per kategori
    Route::get('/category/{id}', [CategoryController::class,'getCategory'])->name('getCategory');
    // tampilan publisher
    Route::get('/publisher', [PublisherController::class,'getPublisher'])->name('getPublisher');
    // tampilan publisher dan semua bukunya
    Route::get('/publisher/{id}', [PublisherController::class,'getBookByPublisher'])->name('getBookByPublisher');
});

// contact
Route::get('/contact', [Controller::class,'getContact'])->name('getContact');

Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'handle'])->name('register');

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'handle'])->name('login');

Route::post('/logout', [LogoutController::class, 'handle'])->name('logout');

use Illuminate\Support\Facades\App;

Route::get('/register/{locale}', function (string $locale) {
    if (! in_array($locale, ['en', 'id'])) {
        abort(400);
    }
 
    App::setLocale($locale);
 
    return view('register');
});