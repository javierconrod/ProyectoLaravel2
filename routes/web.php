<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Productos;

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

Route::get('productos', 'App\Http\Controllers\ProductosController@index')->name('productos.index');

Route::get('productos/{id}/editar', 'App\Http\Controllers\ProductosController@editar')->name('productos.edit');

Route::get('create', function(){
    return view('create');
});

Route::post('crear', 'App\Http\Controllers\ProductosController@crear')->name('productos.store');

Route::put('productos/{productos}/editar', 'App\Http\Controllers\ProductosController@update')->name('productos.update');

Route::delete('productos/{id}', 'App\Http\Controllers\ProductosController@destroy')->name('productos.destroy'); 