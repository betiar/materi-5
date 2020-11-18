<?php


use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\AuthController;
use App\http\Controllers\ProdukController;
use App\http\Controllers\UserController;

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

Route::get('index', [HomeController::class, 'showindex']);
Route::get('kategori', [AuthController::class, 'showKategori']);
Route::get('keuangan', [AuthController::class, 'showkeuangan']);

Route::get('produk', [ProdukController::class, 'index']);
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('produk', [ProdukController::class, 'store']);
Route::get('produk/{produk}', [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('produk/{produk}', [ProdukController::class, 'update']);
Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);


route::get('user', [UserController::class, 'index']);
route::get('user/create', [UserController::class, 'create']);
route::post('user', [UserController::class, 'store']);
route::get('user/{user}', [UserController::class, 'show']);
route::get('user/{user}/edit', [UserController::class, 'edit']);
route::put('user/{user}', [UserController::class, 'update']);
route::delete('user/{user}', [UserController::class, 'destroy']);

route::get('log', [AuthController::class, 'showLog']);
route::post('log', [AuthController::class, 'logProcess']);

route::get('register', [AuthController::class, 'showregister']);
route::post('register', [AuthController::class, 'registerProcess']);

