<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use Illuminate\Http\Request;
/**
 * <Class UsuariosController>
 * <Class En esta clase se maneja todo lo que tiene que ver con la parte del ususario en particular del proyecto>
 * 
 * @author 	<Sergio Alejandro Prieto Molano // sergio_prietomo@fet.edu.co>
 * @since 		<22/sep/2021>
 * 
 * All Rigths Reserved.
 * Consensus Corporation. 
 *
 */

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Esta funcion le muestra al ususario la pagina de inicio de world of pizza
    public function index()
    {
        return view('usuarios.inicioUser');
    }

    //Esta funcion hace un redirect, donde le muestra al ususario la pagina de inicio de world of pizza
    public function index2()
    {
        return redirect('/PizzaWorld');

    }

    //Esta funcion le muestra al ususario su perfil con su respectiva informacion 
    public function index3()
    {
        return view('usuarios.UserPerfil');
    }

    //Esta funcion le muestra al ususario la pagina de inicio de world of pizza
    public function index4()
    {
        return view('usuarios.UserFavoritos');
        
    }
    //Esta funcion le muestra al ususario la receta de tipo pizza
    public function index5()
    {
        return view('usuarios.RecetPizzas');
        
    }
    //Esta funcion le muestra al ususario la receta de tipo bebidas
    public function index6()
    {
        return view('usuarios.RecetBebidas');
        
    }
    //Esta funcion le muestra al ususario la receta de tipo postres
    public function index7()
    {
        return view('usuarios.RecetPostres');
        
    }
    //Esta funcion le muestra al ususario la informacion de que es world of pizza
    public function index8()
    {
        return view('usuarios.NosotrosUser');
        
    }
    //Esta funcion le muestra al ususario una pagina para que se comunique con world of pizza
    public function index9()
    {
        return view('usuarios.Contactenos');
        
    }
    //Esta funcion le muestra al ususario las clases en linea de la plataforma
    public function index10()
    {
        return view('usuarios.ClasesUser');
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Esta funcion esta a la espera... (Crear)
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // Esta funcion esta a la espera... ()
    
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    // Esta funcion esta a la espera... (Mostrar)
    public function show(usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    // Esta funcion esta a la espera... (Editar)
    public function edit(usuarios $usuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    // Esta funcion esta a la espera... (Actualizar)
    public function update(Request $request, usuarios $usuarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    // Esta funcion esta a la espera... (Eliminar)
    public function destroy(usuarios $usuarios)
    {
        //
    }
}
