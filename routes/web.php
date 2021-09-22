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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/prueba', function () {
    return 'Hola';
});
//INGRESO A LA PLATAFORMA
Route::get('/PizzaWorld', function () {
    return view('bienvenida');
});
Route::get('/PizzaWorld/login', function () {
    return view('login');
});
Route::get('/PizzaWorld/registro', function () {
    return view('registro');
});

//PARTE DE USUARIO PARTICULARES
Route::resource('PizzaWorld/User', 'UsuariosController');
Route::get('PizzaWorld/UserOut', 'UsuariosController@index2');
Route::get('PizzaWorld/UserPerfil', 'UsuariosController@index3');
Route::get('PizzaWorld/UserFav', 'UsuariosController@index4');

//PARTE DE ADMIN PARTICULARES
Route::resource('PizzaWorld/Admin', 'AdministradorController');
Route::get('PizzaWorld/AdminPerfil', 'AdministradorController@index2');
Route::get('PizzaWorld/AdminComunidad', 'AdministradorController@index3');
Route::get('PizzaWorld/AdminRecetas', 'AdministradorController@index4');
Route::get('PizzaWorld/AdminAddRec', 'AdministradorController@index5');

