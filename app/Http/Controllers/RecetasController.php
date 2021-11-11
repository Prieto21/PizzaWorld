<?php

namespace App\Http\Controllers;

use App\Models\recetas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecetasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // ESTA FUNCION MUESTRA UNA VISTA SIMILAR A TODOS LOS USUARIOS QUE NO ESTAN REGISTRADOS EN WOP
    public function index()
    {
        return view('usuariosComun.InicioUserComun');
    }
    // ESTA FUNCION MUESTRA UNA VISTA LIMITADAD DE LAS RECETAS DE PIZZAS, CON SU RESPECTIVA CONSULTA CON CONDICIONES
    public function index2()
    {
        $pizzas = DB::table('recetas')
        ->join('tiporecetas', 'tiporecetas.id', '=', 'recetas.id_receta')
        
        ->select('recetas.receta','recetas.descripcion','recetas.foto','recetas.id_receta','tiporecetas.tipo')
        
        ->where('recetas.id_receta', '=', '1') 
        ->get();
        
        return view('usuariosComun.RecetPizzasCo', compact('pizzas'));
    }
    // ESTA FUNCION MUESTRA UNA VISTA LIMITADAD DE LAS RECETAS DE BEBIDAS, CON SU RESPECTIVA CONSULTA CON CONDICIONES
    public function index3()
    {
        $bebidas = DB::table('recetas')
        ->join('tiporecetas', 'tiporecetas.id', '=', 'recetas.id_receta')
        
        ->select('recetas.receta','recetas.descripcion','recetas.foto','recetas.id_receta','tiporecetas.tipo')
        
        ->where('recetas.id_receta', '=', '2') 
        ->get();
        
        return view('usuariosComun.RecetBebidasCo', compact('bebidas'));
    }
    // ESTA FUNCION MUESTRA UNA VISTA LIMITADAD DE LAS RECETAS DE POSTRES, CON SU RESPECTIVA CONSULTA CON CONDICIONES
    public function index4()
    {
        $postres = DB::table('recetas')
        ->join('tiporecetas', 'tiporecetas.id', '=', 'recetas.id_receta')
        
        ->select('recetas.receta','recetas.descripcion','recetas.foto','recetas.id_receta','tiporecetas.tipo')
        
        ->where('recetas.id_receta', '=', '3') 
        ->get();
        return view('usuariosComun.RecetPostresCo', compact('postres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\recetas  $recetas
     * @return \Illuminate\Http\Response
     */
    public function show(recetas $recetas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\recetas  $recetas
     * @return \Illuminate\Http\Response
     */
    public function edit(recetas $recetas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\recetas  $recetas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, recetas $recetas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\recetas  $recetas
     * @return \Illuminate\Http\Response
     */
    public function destroy(recetas $recetas)
    {
        //
    }
}
