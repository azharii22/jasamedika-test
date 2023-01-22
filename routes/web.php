<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OperatorController;
// use App\Http\Controllers\PasienController;


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
    return view('auth.login');
});
Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/operator', [OperatorController::class, 'indexOperator'])->name('home');
    Route::get('/tambah-pasien', [OperatorController::class, 'create'])->name('tambah-pasien');
    Route::post('/post-pasien', [OperatorController::class, 'store']);
    Route::get('/hapus-pasien/{id}', [OperatorController::class, 'destroy']);
    Route::get('/edit-pasien/{id}', [OperatorController::class, 'edit']);
    Route::put('/update/pasien/{id}', [OperatorController::class, 'update']);
    Route::get('/cetak/pasien/{id}', [OperatorController::class, 'cetak']);

});

Route::middleware(['is_admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    // Route::get('/data-kelurahan', [HomeController::class, 'kelurahan']);
    Route::get('/tambah-kelurahan', [AdminController::class, 'createKel'])->name('tambah-kelurahan');
    Route::post('/post-kelurahan', [AdminController::class, 'storeKel']);
    Route::get('/admin/edit-kelurahan/{id}', [AdminController::class, 'editKel']);
    Route::put('/update-kelurahan/{id}', [AdminController::class, 'updateKel']);
    Route::get('/hapus-kelurahan/{id}', [AdminController::class, 'destroyKel']);

});
