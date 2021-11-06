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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    // return 'Hola';
    return redirect('/PizzaWorld');
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


// Prueba

//PARTE DE USUARIO PARTICULARES
Route::resource('PizzaWorld/User', 'UsuariosController');
Route::get('PizzaWorld/UserOut', 'UsuariosController@index2');
Route::get('PizzaWorld/UserPerfil', 'UsuariosController@index3');
Route::get('PizzaWorld/UserFav', 'UsuariosController@index4');
Route::get('PizzaWorld/Receta_Pizzas', 'UsuariosController@index5');
Route::get('PizzaWorld/Receta_Bebidas', 'UsuariosController@index6');
Route::get('PizzaWorld/Receta_Postres', 'UsuariosController@index7');
Route::get('PizzaWorld/Nosotros', 'UsuariosController@index8');
Route::get('PizzaWorld/Contactenos', 'UsuariosController@index9');
Route::get('PizzaWorld/ClasesOnline', 'UsuariosController@index10');

//PARTE DE USUARIO MIEMBROS
Route::resource('PizzaWorld/UserCo', 'RecetasController');
Route::get('PizzaWorld/Receta_PizzasCo', 'RecetasController@index2');
Route::get('PizzaWorld/Receta_BebidasCo', 'RecetasController@index3');
Route::get('PizzaWorld/Receta_PostresCo', 'RecetasController@index4');
Route::get('/PizzaWorld/NosotrosCo', function () {
    return view('usuariosComun.NosotrosUserCo');
});
Route::get('/PizzaWorld/ContactenosCo', function () {
    return view('usuariosComun.ContactenosCo');
});
Route::get('/PizzaWorld/ClasesOnlineCo', function () {
    return view('usuariosComun.ClasesUserCo');
});

//PARTE DE ADMIN PARTICULARES
Route::resource('PizzaWorld/Admin', 'AdministradorController');
Route::get('PizzaWorld/AdminPerfil', 'AdministradorController@index2');
Route::get('PizzaWorld/AdminComunidad', 'AdministradorController@index3');
Route::get('PizzaWorld/AdminRecetas', 'AdministradorController@index4');
Route::get('PizzaWorld/AdminAddRec', 'AdministradorController@index5');
Route::get('PizzaWorld/AdminClasesOnline', 'AdministradorController@index6');
Route::get('PizzaWorld/AdminNosotros', 'AdministradorController@index7');
Route::get('PizzaWorld/AdminMensajes', 'AdministradorController@index8');

