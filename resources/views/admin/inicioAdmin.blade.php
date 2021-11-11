@extends('layout.layoutAdmin')
@section('contenido')
<br><br><br>
<div class="alert" role="alert">
    <h4 class="alert-heading">¡Bienvenido Jefe!</h4>

    ¡Gran día para trabajar - No olvides revisar las novedades!

</div>


<div class="container" style="max-width: 90%;">

    <div class="contorno">
        <h1 class="textPrincipal">Panel De Control</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <a href="{{url('/PizzaWorld/AdminComunidad')}}">
                <div class="col">
                    <div class="card bg-dark text-white">
                        <img src="{{ asset('imagenes/Comunidad.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-img-overlay">
                            <hr>
                            <h5 class="titulocard">MIEMBROS</h5>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{url('/PizzaWorld/AdminRecetas')}}">
                <div class="col">
                    <div class="card bg-dark text-white">
                        <img src="{{ asset('imagenes/Recetas.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-img-overlay">
                            <hr>
                            <h5 class="titulocard">RECETAS</h5>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{url('/PizzaWorld/AdminAddRec')}}">
                <div class="col">
                    <div class="card bg-dark text-white">
                        <img src="{{ asset('imagenes/AgregarReceta.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-img-overlay">
                            <hr>
                            <h5 class="titulocard">NUEVAS RECETAS</h5>
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{url('/PizzaWorld/AdminMensajes')}}">
                <div class="col">
                    <div class="card bg-dark text-white">
                        <img src="{{ asset('imagenes/Mensajeria.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-img-overlay">
                            <hr>
                            <h5 class="titulocard-mensajes">MENSAJERÍA</h5>
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{url('/PizzaWorld/AdminPerfil')}}">
                <div class="col">


                    <div class="card bg-dark text-white">
                        <img src="{{ asset('imagenes/PerfilAdmin.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-img-overlay">
                            <hr>
                            <h5 class="titulocard">PERFIL</h5>
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{url('/PizzaWorld/AdminNosotros')}}">
                <div class="col">


                    <div class="card bg-dark text-white">
                        <img src="{{ asset('imagenes/Nosotros.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-img-overlay">
                            <hr>
                            <h5 class="titulocard">NOSOTROS</h5>
                        </div>
                    </div>
                </div>
            </a>



        </div>
       
        <br>
        <div class="col">

            <div class="contenidoListUser">
                <center>
                    <h5 class="titulocard">NUEVOS USUARIOS</h5>
                </center>
                <hr>
                <div class="overflow-auto largotabla">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Fecha</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellidos</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($NuevosUser as $info )
                            <tr>
                                <th scope="row">{{$info->fecha}}</th>
                                <td><img src="/imagenes/{{$info->foto}}" style="max-width: 2rem; border-radius: 50%; "></td>
                                <td>{{$info->nombres}}</td>
                                <td>{{$info->apellidos}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <hr>
                <b>
                    <h6>Top de los 5 usuarios más recientes</h6>
                </b>

            </div>
        </div>
        <br>
        <center>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <form action="sexos" method="POST">
                @csrf
                <input type="text" name="sex" value="Mujer" hidden>
                
                <button type="submit" class="btn btn-outline-light">Generador Sexo M</button>
            </form>
            <form action="sexos" method="POST">
                @csrf
                <input type="text" name="sex" value="Hombre" hidden>
                
                <button type="submit" class="btn btn-outline-light">Generador Sexo H</button>
            </form>
            <form action="sexos" method="POST">
                @csrf
                <input type="text" name="sex" value="Otro" hidden>
                
                <button type="submit" class="btn btn-outline-light">Generador Sexo O</button>
            </form>
            <form action="roles" method="POST">
                @csrf
                <input type="text" name="rol" value="Admin" hidden>
                <button type="submit" class="btn btn-outline-light">Generador Roles A</button>
            </form>
            </div>
            </center>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <form action="roles" method="POST">
                @csrf
                <input type="text" name="rol" value="User" hidden>
                <button type="submit" class="btn btn-outline-light">Generador Roles U</button>
            </form>
            <form action="tiporeceta" method="POST">
                @csrf
                <input type="text" name="tipo" value="Pizzas" hidden>
                <button type="submit" class="btn btn-outline-light">Generador T.Recetas P</button>
            </form>
            <form action="tiporeceta" method="POST">
                @csrf
                <input type="text" name="tipo" value="Bebidas" hidden>
                <button type="submit" class="btn btn-outline-light">Generador T.Recetas B</button>
            </form>
            <form action="tiporeceta" method="POST">
                @csrf
                <input type="text" name="tipo" value="Postres" hidden>
                <button type="submit" class="btn btn-outline-light">Generador T.Recetas Po</button>
            </form>
        </div>
    </div>
</div>
<br>
@endsection