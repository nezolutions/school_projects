<?php

use App\Http\Controllers\Barang;
use App\Http\Controllers\Index;
use App\Http\Controllers\Login;
use App\Http\Controllers\PageAdmin;
use App\Http\Controllers\PageDev;
use App\Http\Controllers\Supplier;
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

# Pages
Route::get('/', function () {
    return view('welcome');
});

Route::get('/bloking', [Index::class, 'main']);
Route::get('/bloking/supplier', [Supplier::class, 'sup']);
Route::get('/bloking/package', [Barang::class, 'bar']);

Route::get('/bloking/supplier/add_supplier', [Supplier::class, 'add_sup']);
Route::post('/bloking/supplier/save_sup', [Supplier::class, 'save_sup']);
Route::delete('/bloking/supplier/delete_sup/{id}', [Supplier::class, 'destroy_sup']);
Route::get('/bloking/supplier/update_sup/{id}', [Supplier::class, 'update_sup']);
Route::put('/bloking/supplier/edit_sup/{id}', [Supplier::class, 'edit_sup']);

Route::post('/bloking/package/save_bar', [Barang::class, 'save_bar']);
Route::put('/bloking/package/edit_bar', [Barang::class, 'edit_bar']);
Route::delete('/bloking/package/delete_bar/{id}', [Barang::class, 'destroy_bar']);

Route::get('/login', [Login::class, 'user'])->name('Login');    
Route::get('/logout', [Login::class, 'logout'])->name('Logout');
Route::post('/login/proses', [Login::class, 'proses']);

Route::group(['middleware' => ['auth']], function() {
    Route::group(['middleware' => ['userLoginValidation:1']], function() {
        Route::resource('developer', PageDev::class);
    });
    Route::group(['middleware' => ['userLoginValidation:2']], function() {
        Route::resource('admin', PageAdmin::class);
    });
});

