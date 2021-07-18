<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
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

/* posts area ------------------------------------------------- */

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::post('/posts', [PostController::class, 'store']);

Route::get('/posts/{post}/edit', [PostController::class, 'edit']);

Route::put('/posts/{post}', [PostController::class, 'update']);

Route::delete('/posts/{post}', [PostController::class, 'destroy']);

/* tests area ------------------------------------------------- */

Route::get('/tests', [TestController::class, 'index']);

Route::get('/tests/create', [TestController::class, 'create']);

Route::post('/tests', [TestController::class, 'store']);

Route::get('/tests/{id}/edit', [TestController::class, 'edit']);

Route::put('/tests/{id}', [TestController::class, 'update']);

Route::delete('/tests/{id}', [TestController::class, 'destroy']);

/* customer area --------------------------------------------------- */

Route::get('/customer', [CustomerController::class, 'index']);

Route::get('/customer/create', [CustomerController::class, 'create']);

Route::post('/customer', [CustomerController::class, 'store']);

Route::get('/customer/{id}/edit', [CustomerController::class, 'edit']);

Route::put('/customer/{id}', [CustomerController::class, 'update']);

Route::delete('/customer/{id}', [CustomerController::class, 'destroy']);

/* blog area --------------------------------------------------- */

Route::get('/blogs', [BlogController::class, 'index'])
    ->middleware('auth');

Route::get('/blogs/create', [BlogController::class, 'create'])
    ->middleware('auth');

Route::post('/blogs', [BlogController::class, 'store'])
    ->middleware('auth');

Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])
    ->middleware('auth');

Route::put('/blogs/{id}', [BlogController::class, 'update'])
    ->middleware('auth');

Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])
    ->middleware('auth');




/* dashboard area --------------------------------------------------- */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
