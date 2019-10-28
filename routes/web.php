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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Rutas de la App
Route::resource('autoriza', 'AutorizaController');
Route::resource('clientes', 'ClientesController');
Route::resource('choferes', 'ChoferesController');
Route::resource('productos', 'ProductosController');
Route::resource('paises', 'PaisesController');
Route::resource('transportistas', 'TransportistasController');
Route::resource('vehiculos', 'VehiculosController');
Route::resource('lotes', 'LotesController');
Route::resource('despachos', 'DespachosController');
Route::resource('proyectos', 'ProyectosController');

// Ruta para obtener los estados por pais de origen
Route::Get('estadosByPaises/{id}', 'EstadosController@byPais');

Route::get('/estados','LocalizacionController@paises');
Route::get('/json-estados','LocalizacionController@estados');
Route::get('/json-municipios','LocalizacionController@municipios');
Route::get('/json-parroquias', 'LocalizacionController@parroquias');
Route::get('/json-ciudades', 'LocalizacionController@ciudades');

//Formularios modales de la vista Productos
//Route::get('/productos/modal', 'ProductosController@modal');
//Route::get('/lotes/modal', 'LotesController@modal');

Route::resource('fgc161', 'Fgc161Controller');


// Reportes con DomPDF
Route::get('htmlpdf58','PDFController@htmlPDF58');
Route::get('generatePDF58','PDFController@generatePDF58');

Route::get('reportes/htmlpdf58','PDFController@htmlPDF58a');
Route::get('reportes/generatePDF58','PDFController@generatePDF58a')->name('PDF58pdf');

Route::get('reportes/fgc160/{id}','PDFController@htmlfgc160')->name('fgc160.html');
Route::get('reportes/generatefgc160/{id}','PDFController@generatefgc160')->name('fgc160.pdf');

Route::get('reportes/fgc161/{id}','PDFController@htmlfgc161')->name('fgc161.html');
Route::get('reportes/generatefgc161/{id}','PDFController@generatefgc161')->name('fgc161.pdf');

Route::get('reportes/hdr/{id}','PDFController@htmlhdr')->name('hdr.html');
Route::get('reportes/generatehdr/{id}','PDFController@generatehdr')->name('hdr.pdf');

Route::get('reportes/rep_tec/{id}','PDFController@htmlrep_tec')->name('rep_tec.html');
Route::get('reportes/generaterep_tec/{id}','PDFController@generaterep_tec')->name('rep_tec.pdf');
