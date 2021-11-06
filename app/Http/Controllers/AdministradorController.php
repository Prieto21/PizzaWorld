<?php

namespace App\Http\Controllers;

use App\Models\administrador;
use Illuminate\Http\Request;

/**
 * <Class AdministradorController>
 * <Class En esta clase se maneja todo lo que tiene que ver con la parte administrativa del proyecto>
 * 
 * @author 	<Sergio Alejandro Prieto Molano // sergio_prietomo@fet.edu.co>
 * @since 		<22/sep/2021>
 * 
 * All Rigths Reserved.
 * Consensus Corporation. 
 *
 */


class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // Esta funcion mostrara al usuario (Administrador), su pagina de inicio
    public function index()
    {
        return view('admin.inicioAdmin');
    }

    // Esta funcion mostrara al Administrador una pagina donde vera su perfil con su respectiva informacion
    public function index2()
    {
        return view('admin.AdminPerfil');
    }

    // Esta funcion mostrara al Administrador una pagina donde vera lo miembros 
    public function index3()
    {
        return view('admin.AdminMiembros');
    }

    // Esta funcion mostrara al Administrador una pagina donde vera todas las recetas creadas 
    public function index4()
    {
        return view('admin.AdminRecetas');
    }

    // Esta funcion mostrara al Administrador una pagina donde podra agregar las nuevas recetas
    public function index5()
    {
        return view('admin.AdminAddRecetas');
    }
    public function index6()
    {
        return view('admin.AdminClases');
    }
    public function index7()
    {
        return view('admin.AdminNosotros');
    }
    public function index8()
    {
        return view('admin.AdminMensajes');
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
     * @param  \App\Models\administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    // Esta funcion esta a la espera... (Mostrar)
    public function show(administrador $administrador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    // Esta funcion esta a la espera... (Editar)
    public function edit(administrador $administrador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    // Esta funcion esta a la espera... (Actualizar)
    public function update(Request $request, administrador $administrador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    // Esta funcion esta a la espera... (Eliminar)
    public function destroy(administrador $administrador)
    {
        //
    }
}
