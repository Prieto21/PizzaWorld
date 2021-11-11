<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use App\Models\favoritos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // ESTA FUNCION LE MUESTRA LA VISTA PRINCIPAL A LOS USUARIO QUE SON MIEMBROS DE WOP
    public function index()
    {
        return view('usuarios.inicioUser');
    }
    // ESTA FUNCION LE MUESTRA LA VISTA PRINCIPAL DE WOP CUANDO SE SOLO SE COLOCA LA IP
    public function index2()
    {
        return redirect('/PizzaWorld');
    }
    // ESTA FUNCION LE MUESTRA LA VISTA DEL PERFIL A LOS USUARIO QUE SON MIEMBROS DE WOP, CON SU RESPECTIVA CONSULTA DESDE LA DB
    public function index3()
    {
        $perfilUser = DB::table('usuarios')
        
        ->join('sexo', 'sexo.id', '=', 'usuarios.id_sexo' )
        ->select('usuarios.nombres','usuarios.id','usuarios.id_sexo','usuarios.apellidos','usuarios.user','usuarios.foto', 'usuarios.contra','usuarios.email','usuarios.edad','sexo.sexo')
        ->where('usuarios.id', '=', '5')
        // ->where('usuarios.id_sexo', '=', '3') 
        ->get();
        return view('usuarios.UserPerfil', compact('perfilUser'));
    }
    // ESTA FUNCION LE MUESTRA LA VISTA FAVORITOS A LOS USUARIO QUE SON MIEMBROS DE WOP, CON SU RESPECTIVA CONSULTA DESDE LA DB
    public function index4()
    {
        $InfoFavoritos = DB::table('favoritos')
        
        ->join('usuarios', 'usuarios.id', '=', 'favoritos.id_usuario' )
        ->join('recetas', 'recetas.id', '=', 'favoritos.id_receta' )
        ->select('*', 'favoritos.id as id_favorito')
        ->where('usuarios.id', '=', '5')
        // ->where('usuarios.id_sexo', '=', '3') 
        ->get();
        return view('usuarios.UserFavoritos', compact('InfoFavoritos'));
        
    }
    // ESTA FUNCION LE MUESTRA LA VISTA RECETAS DE PIZZA A LOS USUARIO QUE SON MIEMBROS DE WOP, CON SU RESPECTIVA CONSULTA DESDE LA DB
    public function index5()
    {
        $pizzas = DB::table('recetas')
        ->join('tiporecetas', 'tiporecetas.id', '=', 'recetas.id_receta')
        
        ->select('recetas.receta','recetas.descripcion','recetas.foto','recetas.id_receta','recetas.id','tiporecetas.tipo')
        
        ->where('recetas.id_receta', '=', '1') 
        ->get();
        return view('usuarios.RecetPizzas', compact('pizzas'));
        
    }
    // ESTA FUNCION LE MUESTRA LA VISTA RECETAS DE BEBIDAS A LOS USUARIO QUE SON MIEMBROS DE WOP, CON SU RESPECTIVA CONSULTA DESDE LA DB
    public function index6()
    {
        $bebidas = DB::table('recetas')
        ->join('tiporecetas', 'tiporecetas.id', '=', 'recetas.id_receta')
        
        ->select('recetas.receta','recetas.descripcion','recetas.foto','recetas.id_receta','recetas.id','tiporecetas.tipo')
        
        ->where('recetas.id_receta', '=', '2') 
        ->get();
        
        return view('usuarios.RecetBebidas', compact('bebidas'));
        
    }
    // ESTA FUNCION LE MUESTRA LA VISTA RECETAS DE POSTRES A LOS USUARIO QUE SON MIEMBROS DE WOP, CON SU RESPECTIVA CONSULTA DESDE LA DB
    public function index7()
    {
        $postres = DB::table('recetas')
        ->join('tiporecetas', 'tiporecetas.id', '=', 'recetas.id_receta')
        
        ->select('recetas.receta','recetas.descripcion','recetas.foto','recetas.id_receta','recetas.id','tiporecetas.tipo')
        
        ->where('recetas.id_receta', '=', '3') 
        ->get();
        return view('usuarios.RecetPostres', compact('postres'));
        
    }
    // ESTA FUNCION LE MUESTRA LA VISTA NOSOTROS A LOS USUARIO QUE SON MIEMBROS DE WOP
    public function index8()
    {
        return view('usuarios.NosotrosUser');
        
    }
    // ESTA FUNCION LE MUESTRA LA VISTA CONTACTENOS A LOS USUARIO QUE SON MIEMBROS DE WOP
    public function index9()
    {
        return view('usuarios.Contactenos');
        
    }
    // ESTA FUNCION LE MUESTRA LA VISTA CLASES ONLINE A LOS USUARIO QUE SON MIEMBROS DE WOP
    public function index10()
    {
        return view('usuarios.ClasesUser');
        
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
    // FUNCION PARA AGREGAR NUEVOS USUARIOS A WOP
    public function store(Request $request)
    {
        usuarios::create($request->all());
        return redirect()->route('User.index');
    }
    // FUNCION PARA AGREGAR PIZZAS A FAVORITOS
    public function store1(Request $request)
    {
        favoritos::create($request->all());
        // return redirect('/PizzaWorld/UserFav');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
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
    // ESTA FUNCION LE PERMITE A LOS USUARIOS DE WOP ACTUALIZAR LOS DATOS
    public function update(Request $request, $id)
    {
        $datosUsuarios = $request->except(['_token','_method']);
        usuarios::where(['id'=>$id])->update($datosUsuarios);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    // ESTA FUNCION LE PERMITE AL USUARIO ELIMINAR LAS RECETAS QUE NO QUIERE EN FAVORITOS
    public function destroy($id)
    {
        favoritos::destroy($id);
        return back();
    }
}
