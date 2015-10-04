<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


	Route::get('/', 'WelcomeController@index');
Route::get('casa', 'VistasController@index');
Route::get('casasassisting', 'VistasController@show');

	Route::get('home', 'HomeController@index');

	Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
	]);
Route::get('contacto', function(){
	return view('contacto');
});
Route::get('heredado', function(){
	return view('heredado');
});

Route::get('welcome', function () {
	return view('welcome');

});
Route::get('independent', function () {
	return view('independent');

});
Route::get('assisting', function () {
	return view('assisting');

});
Route::get('memorycare', function () {
	return view('memorycare');

});
Route::get('plantillasimple', function () {
	return view('plantillasimple');

});
Route::get('Icasas', function () {
	return view('Icasas');

});
Route::get('casasayulita', function () {
	return view('casasayulita');

});
Route::get('tecnologia', function () {
	return view('tecnologia');

});
Route::get('healthcare', function () {
	return view('healthcare');

});
Route::get('amenities', function () {
	return view('amenities');

});
Route::get('gacasasayulita', function () {
	return view('gacasasayulita');

});
Route::get('casabusqueda', function () {
	return view('casabusqueda');

});

Route::get('busqueda', function () {
	return view('busqueda');

});
Route::get('casaconchaschinas', function () {
	return view('casaconchaschinas');

});
Route::get('casamemorycare', function () {
	return view('casamemorycare');

});
Route::get('residenciaamapa', function () {
	return view('residenciaamapa');


});

Route::get('Acasas', function () {
	return view('Acasas');


});
Route::get('formulario', function () {
	return view('formulario');


});
Route::get('Mcasas', function () {
	return view('Mcasas');


});
Route::get('makeyourmenu', function () {
	return view('makeyourmenu');


});
Route::get('formulario', [
	'as' => 'form_path',

]);

	Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function (){
		Route::resource('users', 'UsersController');
	});

	Route::group(['prefix' => 'admin', 'namespace' => 'Property'], function (){
		Route::resource('properties', 'PropertiesController');
	});

	Route::group(['prefix' => 'admin', 'namespace' => 'Bedroom'], function (){
		Route::resource('properties.bedrooms', 'BedRoomController');
	});

	Route::group(['prefix' => 'admin', 'namespace' => 'Administrator'], function (){
		Route::resource('control', 'AdminController');
	});
	Route::group(['prefix' => 'admin', 'namespace' => 'ameneties'], function (){
		Route::resource('ameneties', 'AmenetiesController');
	});
		Route::group(['prefix' => 'admin', 'namespace' => 'Characteristic'], function (){
		Route::resource('properties.characteristic', 'CharacteristicsController');
	});