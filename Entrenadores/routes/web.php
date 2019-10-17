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

route::get('/name/{name}/lastname/{lastname?}', function($name , $lastname = '') {
return 'HOLAAAA ' . $name . $lastname;
});

route::get('/mi_primer_ruta', function(){
	return 'Hola Mundo, esta es mi primera ruta ;D.';
});

route::resource('trainer', 'Trainer');