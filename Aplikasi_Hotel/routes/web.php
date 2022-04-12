<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\TamuController;
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
})->name('home');



Route::get('/fasilitas', [TamuController::class, "fasilitas"])->name('fasilitas');

Route::get('/kamar', [TamuController::class, "listKamar"])->name('kamar');
Route::get('/kamar/detail/{id}', [TamuController::class, "detailKamar"])->name('detailkamar');

Route::get('/pesan', [TamuController::class, "viewBook"])->name('pesan');
Route::post('/pesan/sendata', [TamuController::class, "orderBook"])->name('pesandata');
Route::get('/pesan/sendata/{id}', [TamuController::class, "konfirmasiOrder"])->name('bookpreview');


Route::view(config('admin.path').'/login','auth.login')->name('admin.login');

Route::group([
    'prefix'=>config('admin.path'),
    'namespace'=>'App\\Http\\Controllers',
],function (){
    Route::get('login',[LoginAdminController::class,'formLogin'])->name('admin.login');
    Route::post('login',[LoginAdminController::class,'login']);

    Route::group(['middleware' => 'auth:admin'], function(){
        Route::post('logout',[LoginAdminController::class,'logout'])->name('admin.logout');
        Route::view('/','dashboard')->name('dashboard');
        Route::resource('pemesanan','PemesananController');
        Route::get('akun',[AdminController::class,'akun'])->name('admin.akun');
        Route::put('akun',[AdminController::class,'updateAkun']);
        Route::group(['middleware'=>['can:role,"admin"']],function (){
            Route::resource('admin','AdminController');
            Route::resource('kamar','KamarController');
            Route::resource('fasilitashtl','FasilitasHotelController');
            Route::resource('fasilitaskmr','FasilitasKamarController');
        });
    });
});


