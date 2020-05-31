<?php

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

//Ruta Inicio
Route::get('/', ['as'=>'inicio.index','uses'=>'InicioController@index']);
//Fin Ruta Inicio

//Ruta de Categoria
Route::get('/categoria', ['as'=>'categoria.index', 'uses'=>'CategoriaController@index']);
Route::get('/categoria/create', ['as'=>'categoria.create','uses'=>'CategoriaController@create']);
Route::post('categoria',['as'=>'categoria.store', 'uses'=>'CategoriaController@store']);
Route::get('categoria/{id}/editar',['as'=>'categoria.editar', 'uses'=>'CategoriaController@edit',]);
Route::patch('categoria/{id}',['as'=>'categoria.update', 'uses'=>'CategoriaController@update',]);
Route::get('categoria/{id}/delete',['as'=>'categoria.delete', 'uses'=>'CategoriaController@destroy',]);
//Fin Ruta Categoria

//Ruta Proveedor
Route::get('/proveedor', ['as'=>'proveedor.index', 'uses'=>'ProveedorController@index']);
Route::get('/proveedor/create', ['as'=>'proveedor.create','uses'=>'ProveedorController@create']);
Route::post('proveedor',['as'=>'proveedor.store', 'uses'=>'ProveedorController@store']);
Route::get('proveedor/{id}/editar',['as'=>'proveedor.editar', 'uses'=>'ProveedorController@edit',]);
Route::patch('proveedor/{id}',['as'=>'proveedor.update', 'uses'=>'ProveedorController@update',]);
Route::get('proveedor/{id}/delete',['as'=>'proveedor.delete', 'uses'=>'ProveedorController@destroy',]);
//Fin Ruta Proveedor

//Ruta Producto
Route::get('/producto', ['as'=>'producto.index', 'uses'=>'ProductoController@index']);
Route::get('/producto/create', ['as'=>'producto.create','uses'=>'ProductoController@create']);
Route::post('producto',['as'=>'producto.store', 'uses'=>'ProductoController@store']);
Route::get('producto/{id}/editar',['as'=>'producto.editar', 'uses'=>'ProductoController@edit',]);
Route::patch('producto/{id}',['as'=>'producto.update', 'uses'=>'ProductoController@update',]);
Route::get('producto/{id}/delete',['as'=>'producto.delete', 'uses'=>'ProductoController@destroy',]);
//Fin Ruta Producto

//Ruta Compra
Route::get('/compra', ['as'=>'compra.index', 'uses'=>'CompraController@index']);
Route::get('/compra/create', ['as'=>'compra.create','uses'=>'CompraController@create']);
Route::post('compra',['as'=>'compra.store', 'uses'=>'CompraController@store']);
Route::get('compra/{id}/editar',['as'=>'compra.editar', 'uses'=>'CompraController@edit',]);
Route::patch('compra/{id}',['as'=>'compra.update', 'uses'=>'CompraController@update',]);
Route::get('compra/{id}/delete',['as'=>'compra.delete', 'uses'=>'CompraController@destroy',]);
//Fin Ruta Compra

//Ruta Proveedor_Producto
Route::get('/proveedor_producto', ['as'=>'proveedor_producto.index', 'uses'=>'ProveedorProductoController@index']);
Route::get('/proveedor_producto/create', ['as'=>'proveedor_producto.create','uses'=>'ProveedorProductoController@create']);
Route::post('proveedor_producto',['as'=>'proveedor_producto.store', 'uses'=>'ProveedorProductoController@store']);
Route::get('proveedor_producto/{id}/editar',['as'=>'proveedor_producto.editar', 'uses'=>'ProveedorProductoController@edit',]);
Route::patch('proveedor_producto/{id}',['as'=>'proveedor_producto.update', 'uses'=>'ProveedorProductoController@update',]);
Route::get('proveedor_producto/{id}/delete',['as'=>'proveedor_producto.delete', 'uses'=>'ProveedorProductoController@destroy',]);
//Fin Ruta Proveedor_Producto

//Ruta Detalle_Compra
Route::get('/detalle_compra', ['as'=>'detalle_compra.index', 'uses'=>'DetalleCompraController@index']);
Route::get('/detalle_compra/create', ['as'=>'detalle_compra.create','uses'=>'DetalleCompraController@create']);
Route::post('detalle_compra',['as'=>'detalle_compra.store', 'uses'=>'DetalleCompraController@store']);
Route::get('detalle_compra/{id}/editar',['as'=>'detalle_compra.editar', 'uses'=>'DetalleCompraController@edit',]);
Route::patch('detalle_compra/{id}',['as'=>'detalle_compra.update', 'uses'=>'DetalleCompraController@update',]);
Route::get('detalle_compra/{id}/delete',['as'=>'detalle_compra.delete', 'uses'=>'DetalleCompraController@destroy',]);
//Fin Ruta Detalle_Compra
