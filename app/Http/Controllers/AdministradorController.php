<?php

namespace App\Http\Controllers;

use App\Models\administrador;
use App\Models\recetas;
use App\Models\roles;
use App\Models\sexo;
use App\Models\sexos;
use App\Models\tiporeceta;
use App\Models\usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // ESTA FUNCION SE ENCARGA DE MOSTRAR LA VISTA PRINCIPAL DEL ADMINISTRADOR, DONDE A SU VES SE CREA UNA CONSULTA SELECTIVA DE 10 PERSONAS DONDE SU ROL ES DE USUARIOS QUE SON MIEMBROS
    // EN UN ORDEN DESENDENTE
    public function index()
    {
        $NuevosUser = DB::table('usuarios')
        
        ->select('usuarios.nombres','usuarios.apellidos','usuarios.foto', 'usuarios.created_at as fecha')
        ->where('usuarios.id_rol', '=', '2')
        ->orderBy('usuarios.id', 'DESC')
        ->limit('5')
        ->get();
        
        return view('admin.inicioAdmin', compact('NuevosUser'));
    }
    // ESTA FUNCION SE ENCARGA DE MOSTRAR LA INFORMACION DEL ADMNINISTRADOR, ATRAVES DE UNA CONSULTA CON SUS RESPECTIVAS CONDICIONES
    public function index2()
    {
        $perfilAdmin = DB::table('usuarios')
        ->join('roles', 'roles.id', '=', 'usuarios.id_rol')
        ->join('sexo', 'sexo.id', '=', 'usuarios.id_sexo' )
        ->select('usuarios.nombres','usuarios.id','usuarios.id_rol','usuarios.id_sexo','usuarios.apellidos','usuarios.user','usuarios.foto', 'usuarios.contra','usuarios.email','usuarios.edad','sexo.sexo', 'roles.rol')
        ->where('usuarios.id_rol', '=', '1')
        // ->where('usuarios.id_sexo', '=', '3') 
        ->get();
        return view('admin.AdminPerfil', compact('perfilAdmin'));
    }
    // ESTA FUNCION MUESTRA LA VISTA DE LOS USUARIOS QUE SON PARTE DE WOP, DONDE TIENE SU RESPECTIVA CONSULTA CON SUS CONDICIONES
    public function index3()
    {
        $comunidad = DB::table('usuarios')
        ->join('roles', 'roles.id', '=', 'usuarios.id_rol')
        ->join('sexo', 'sexo.id', '=', 'usuarios.id_sexo' )
        ->select('usuarios.nombres', 'usuarios.id','usuarios.id_rol','usuarios.apellidos','usuarios.user','usuarios.foto', 'usuarios.contra','usuarios.email','usuarios.edad','sexo.sexo', 'roles.rol')
        ->where('usuarios.id_rol', '=', '2')
        // ->where('usuarios.id_sexo', '=', '3') 
        ->get();
        
        
        // $comunidad = usuarios::all();
        return view('admin.AdminMiembros', compact('comunidad'));
    }
    // ESTA FUNCION MUESTRA EN UN VISTA LOS TRES TIPOS DE RECETAS, CADA UNA SE ENVIA POR DIFERENTE VARIABLES, CON SUS RESPECTIVAS CONSULTAS
    public function index4()
    {
        $pizzas = DB::table('recetas')
        ->join('tiporecetas', 'tiporecetas.id', '=', 'recetas.id_receta')
        
        ->select('recetas.receta','recetas.descripcion','recetas.foto','recetas.id_receta','tiporecetas.tipo', 'recetas.id')
        
        ->where('recetas.id_receta', '=', '1') 
        ->get();
        $bebidas = DB::table('recetas')
        ->join('tiporecetas', 'tiporecetas.id', '=', 'recetas.id_receta')
        
        ->select('recetas.receta','recetas.descripcion','recetas.foto','recetas.id_receta','tiporecetas.tipo', 'recetas.id')
        
        ->where('recetas.id_receta', '=', '2') 
        ->get();
        $postres = DB::table('recetas')
        ->join('tiporecetas', 'tiporecetas.id', '=', 'recetas.id_receta')
        
        ->select('recetas.receta','recetas.descripcion','recetas.foto','recetas.id_receta','tiporecetas.tipo', 'recetas.id')
        
        ->where('recetas.id_receta', '=', '3') 
        ->get();
        
        return view('admin.AdminRecetas', compact('bebidas', 'pizzas', 'postres'));
    }

    // ESTA FUNCION LE MUESTRA LA VISTA DE AGREGAR NUEVAS RECETAS AL ADMIN
    public function index5()
    {
        return view('admin.AdminAddRecetas');
    }
    // ESTA FUNCION LE MUESTRA LA VISTA DE CLASES ONLINE AL ADMIN
    public function index6()
    {
        return view('admin.AdminClases');
    }
    // ESTA FUNCION LE MUESTRA LA VISTA DE NOSOTROS DE WOP AL ADMIN
    public function index7()
    {
        return view('admin.AdminNosotros');
    }
    // ETAS FUNCION LE MUESTRA LA VISTA DE MENSAJERIA DE WOP AL ADMIN
    public function index8()
    {
        return view('admin.AdminMensajes');
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
    
    //ESTA FUNCION PERMITE AL ADMIN CREAR NUEVAS RECETAS

    public function store(Request $request)
    {
        recetas::create($request->all());
        // return redirect('/PizzaWorld/UserFav');
        return back();
    }
    public function store1(Request $request)
    {
        sexos::create($request->all());
        // return redirect('/PizzaWorld/UserFav');
        return back();
    }
    public function store2(Request $request)
    {
        roles::create($request->all());
        // return redirect('/PizzaWorld/UserFav');
        return back();
    }
    public function store3(Request $request)
    {
        tiporeceta::create($request->all());
        // return redirect('/PizzaWorld/UserFav');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\administrador  $administrador
     * @return \Illuminate\Http\Response
     */
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
    // ESTA FUNCION LE PERMITE AL ADMIN MODIFICAR LAS RECETAS
    public function update(Request $request, $id)
    {
        $datosRecetas = $request->except(['_token','_method']);
        recetas::where(['id'=>$id])->update($datosRecetas);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    // ESTA FUNCION LE PERMITE AL ADMIN ELIMINAR USUARIOS
    public function destroy($id)
    {
        usuarios::destroy($id);
        return back();
    }
    // ESTA FUNCION LE PERMITE ELIMINAR RECETAS AL ADMIN
    public function destroy1($id)
    {
        recetas::destroy($id);
        return back();
    }
}
