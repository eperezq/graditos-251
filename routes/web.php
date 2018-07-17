<?php

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
    return view('componentes/inicio');
});



// Route::group(['middleware'=>'Administrador'],function(){
    Route::get('empleado','EmpleadoController@index')->name('empleado');
    Route::get('editarempleado/{id}/editar','EmpleadoController@edit')->name('editarempleados');
    Route::get('create','EmpleadoController@create')->name('creareturn');
    Route::post('crearempleado','EmpleadoController@store')->name('crearempleados');
    Route::patch('/{id}','EmpleadoController@update')->name('update');
    Route::delete('/{id}','EmpleadoController@destroy')->name('eliminarempleado');
// });
    
    Route::get('categoria','CategoriaController@index')->name('categoria');
    Route::get('crearcategoria','CategoriaController@create')->name('categoriashow');
    Route::post('crearcategoria','CategoriaController@store')->name('categoriacreate');
    Route::get('categoria/{id}/editar','CategoriaController@edit')->name('categoriaedit');
    Route::patch('categoria/{id}','CategoriaController@update')->name('categoriaupdate');
    Route::delete('categoria/{id}','CategoriaController@destroy')->name('categoriadelete');



    Route::get('proveedor','ProveedorController@index')->name('proveedor');
    Route::get('crearproveedor','ProveedorController@create')->name('proveedorshow');
    Route::post('crearproveedor','ProveedorController@store')->name('proveedorcreate');
    Route::get('proveedor/{id}/editar','ProveedorController@edit')->name('proveedoredit');
    Route::patch('proveedor/{id}','ProveedorController@update')->name('proveedorupdate');
    Route::delete('proveedor/{id}','ProveedorController@destroy')->name('proveedordelete');

    Route::get('cliente','ClienteController@index')->name('cliente');
    Route::get('crearcliente','ClienteController@create')->name('clienteshow');
    Route::post('crearcliente','ClienteController@store')->name('clientecreate');
    Route::get('cliente/{id}/editar','ClienteController@edit')->name('clienteedit');
    Route::patch('cliente/{id}','ClienteController@update')->name('clienteupdate');
    Route::delete('cliente/{id}','ClienteController@destroy')->name('clientedelete');


    Route::get('producto','ProductoController@index')->name('producto');
    Route::get('crearproducto','ProductoController@create')->name('productoshow');
    Route::post('crearproducto','ProductoController@store')->name('productocreate');
    Route::get('producto/{id}/editar','ProductoController@edit')->name('productoedit');
    Route::patch('producto/{id}','ProductoController@update')->name('productoupdate');
    Route::delete('producto/{id}','ProductoController@destroy')->name('productodelete');


    Route::get('detaentra','DetalleEntradaController@create')->name('detallentradashow');
    Route::post('detaentra','DetalleEntradaController@store');

Route::get('error', function () {
   abort(404);
});
Route::get('error', function () {
    abort(503);
 });