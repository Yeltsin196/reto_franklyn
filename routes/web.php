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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/crearcategoria', function()
{
	
    return view('crearcategoria');
});



Route::get('/productosporcategoria', 'Productoscontroller@productos_x_categoria');


Route::get('/crearproducto', function()
{
	$cate = \DB::table('categorias')->get();
    return view('crearproducto',['categorias'=>$cate]);
});

Route::get('/listaproductos','Productoscontroller@lista_productos');
Route::get('/listacategorias','CategoriasController@lista_categorias');


Route::post('/productoregistrado','ProductosController@productoregistrado');
Route::post('/categoriaregistrada','CategoriasController@categoriacreada');
Route::post('/busqueda/{nombre_producto?}', 'Productoscontroller@busqueda');

