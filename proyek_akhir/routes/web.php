<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\Layout;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\userManagement;
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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/',[Layout::class,'home']);

Route::get('/', function () {
    return view('auth.login');
 });


Route::middleware(['auth'])->group(function ()
{
    Route::controller(Layout::class)->group(function(){
        Route::get('/layout/home','home');
        Route::get('/layout/index','index');
        Route::get('/toko/daftarToko', [TokoController::class, 'index']);
        Route::get('/toko/tambahToko', [TokoController::class, 'create']);
        Route::post('/toko/store', [TokoController::class, 'store']);
        Route::get('/toko/show/{id}', [TokoController::class, 'show']);
        Route::put('/toko/update/{id}', [TokoController::class, 'update']);
        Route::get('/toko/{id}/edit', [TokoController::class, 'edit']);
        Route::get('/toko/destroy/{id}', [TokoController::class, 'destroy']);

        Route::get('/barangMasuk/daftarBarang', [BarangMasukController::class, 'index']);
        Route::get('/barangMasuk/tambahBarangMasuk', [BarangMasukController::class, 'create']);
        Route::post('/barangMasuk/store', [BarangMasukController::class, 'store']);
        Route::get('/barangMasuk/show/{id}', [BarangMasukController::class, 'show']);
        Route::put('/barangMasuk/update/{id}', [BarangMasukController::class, 'update']);
        Route::get('/barangMasuk/{id}/edit', [BarangMasukController::class, 'edit']);
        Route::get('/barangMasuk/destroy/{id}', [BarangMasukController::class, 'destroy']);

        Route::get('/barangKeluar/daftarBarang', [BarangKeluarController::class, 'index']);
        Route::get('/barangKeluar/tambahBarangkeluar', [BarangKeluarController::class, 'create']);
        Route::post('/barangKeluar/storeKlr', [BarangKeluarController::class, 'store']);
        Route::get('/barangKeluar/show/{id}', [BarangKeluarController::class, 'show']);
        Route::put('/barangKeluar/update/{id}', [BarangKeluarController::class, 'update']);
        Route::get('/barangKeluar/{id}/edit', [BarangKeluarController::class, 'edit']);
        Route::get('/barangKeluar/destroy/{id}', [BarangkeluarController::class, 'destroy']);

        Route::resource('barangMasuks'  ,       BarangMasukController::class);
        Route::resource('barangKeluars' ,       BarangKeluarController::class);
        Route::resource('tokos'         ,       TokoController::class);

        Route::get('/user/index', [userManagement::class, 'index']);
    });


});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
