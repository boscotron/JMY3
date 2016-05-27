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

Route::get('/', function () {
	$url = url('');		
    return View('login/in',["url"=>$url]);
});


/*
Pruebas  ---- BSK ----
Route::get('home/index', 'HomeController@index');
Route::get('home/id/{id}', 'HomeController@getId');
Route::get('home/showview', 'HomeController@showview');
// Peticiones del tipo GET y POST
//Route::match(["get","post"],"home/form","HomeController@form");
Route::any("home/form","HomeController@form");
Route::get("home/nombre/{nombre}/apellidos/{apellidos}", function($nombre, $apellidos){
    return  $nombre . " " . $apellidos;
})->where(["nombre" => "[a-zA-Z]+", "apellidos" => "[a-zA-Záéíóú]+"]);
Route::get("home/miformulario", "HomeController@miFormulario");
Route::post("home/validarmiformulario", "HomeController@validarMiFormulario");

*/