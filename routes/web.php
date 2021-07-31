<?php

use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CoffeeController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MemoController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
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

Route::get('/memo', [MemoController::class, 'index'])
    ->name('memo.index')
    ->middleware('auth');

Route::get('/memo/add', [MemoController::class, 'add'])
    ->name('memo.add');

// My route area ----------------------------------------------

Route::get('/my', [MyController::class, 'index']);

Route::get('/my/create', [MyController::class, 'create']);

Route::post('/my', [MyController::class, 'store']);

Route::get('/my/{id}/edit', [MyController::class, 'edit']);

Route::put('/my/{id}', [MyController::class, 'update']);

Route::delete('/my/{id}', [MyController::class, 'delete']);


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

/* profile area --------------------------------------------------- */

Route::get('/profile', [ProfileController::class, 'index'])
    ->middleware('auth');

Route::get('/profile/create', [ProfileController::class, 'create'])
    ->middleware('auth');

Route::post('/profile', [ProfileController::class, 'store'])
    ->middleware('auth');

Route::get('/profile/{id}/edit', [ProfileController::class, 'edit'])
    ->middleware('auth');

Route::put('/profile/{id}', [ProfileController::class, 'update'])
    ->middleware('auth');

Route::delete('/profile/{id}', [ProfileController::class, 'destroy'])
    ->middleware('auth');


Route::get('/crud', [CrudController::class, 'index'])
    ->name('crud.index')
    ->middleware('auth');

Route::get('/crud/create', [CrudController::class, 'create'])
    ->name('crud.create')
    ->middleware('auth');

Route::post('/crud', [CrudController::class, 'store'])
    ->name('crud.create')
    ->middleware('auth');

Route::get('/crud/{id}/edit', [CrudController::class, 'edit'])
    ->name('crud.edti')
    ->middleware('auth');

Route::put('/crud/{id}', [CrudController::class, 'update'])
    ->name('crud.update')
    ->middleware('auth');

Route::delete('/crud/{id}', [CrudController::class, 'destroy'])
    ->name('crud.delete')
    ->middleware('auth');

/* archive area --------------------------------------------------- */

Route::get('/archive', [ArchiveController::class, 'index'])
    ->name('archive.index')
    ->middleware('auth');

Route::get('/archive/create', [ArchiveController::class, 'create'])
    ->name('archive.create')
    ->middleware('auth');

Route::post('/archive', [ArchiveController::class, 'store'])
    ->name('archive.store')
    ->middleware('auth');

Route::get('/archive/{id}/edit', [ArchiveController::class, 'edit'])
    ->name('archive.edit')
    ->middleware('auth');

Route::put('/archive/{id}', [ArchiveController::class, 'update'])
    ->name('archive.update')
    ->middleware('auth');

Route::delete('/archive/{id}', [ArchiveController::class, 'destroy'])
    ->name('archive.delete')
    ->middleware('auth');

/* archive area --------------------------------------------------- */

Route::get('/item', [ItemController::class, 'index']);

Route::get('/item/create', [ItemController::class, 'create']);

Route::post('/item', [ItemController::class, 'store']);

Route::get('/item/{id}/edit', [ItemController::class, 'edit']);

Route::put('/item/{id}', [ItemController::class, 'update']);

Route::delete('/item/{id}', [ItemController::class, 'delete']);

/* archive area --------------------------------------------------- */

Route::get('/coffee', [CoffeeController::class, 'index']);

Route::get('/coffee/create', [CoffeeController::class, 'create']);

Route::post('/coffee', [CoffeeController::class, 'store']);

Route::get('/coffee/{id}/edit', [CoffeeController::class, 'edit']);

Route::put('/coffee/{id}', [CoffeeController::class, 'update']);

Route::delete('/coffee/{id}', [CoffeeController::class, 'delete']);

/* Book area -------------------------------------------------------- */

Route::get('/book', [BookController::class, 'index']);

Route::get('/book/create', [BookController::class, 'create']);

Route::post('/book', [BookController::class, 'store']);

Route::get('/book/{id}/edit', [BookController::class, 'edit']);

Route::put('/book/{id}', [BookController::class, 'update']);

Route::delete('/book/{id}', [BookController::class, 'delete']);

/* Hello area --------------------------------------------------- */

Route::get('/hello', [HelloController::class, 'index']);

Route::get('/hello/create', [HelloController::class, 'create']);

Route::post('/hello', [HelloController::class, 'store']);

Route::get('/hello/{id}/{edit}', [HelloController::class, 'edit']);

Route::put('/hello/{id}', [HelloController::class, 'update']);

Route::delete('/hello/{id}', [HelloController::class, 'delete']);

/* dashboard area --------------------------------------------------- */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
