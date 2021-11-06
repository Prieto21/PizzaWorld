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
            </div></a>

            <a href="{{url('/PizzaWorld/AdminMensajes')}}">
            <div class="col">
                <div class="card bg-dark text-white">
                    <img src="{{ asset('imagenes/Mensajeria.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-img-overlay">
                        <hr>
                        <h5 class="titulocard-mensajes">MENSAJERÍA</h5>
                    </div>
                </div>
            </div></a>

            <a href="{{url('/PizzaWorld/AdminPerfil')}}">
            <div class="col">


                <div class="card bg-dark text-white">
                    <img src="{{ asset('imagenes/PerfilAdmin.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-img-overlay">
                        <hr>
                        <h5 class="titulocard">PERFIL</h5>
                    </div>
                </div>
            </div></a>

            <a href="{{url('/PizzaWorld/AdminNosotros')}}">
            <div class="col">


                <div class="card bg-dark text-white">
                    <img src="{{ asset('imagenes/Nosotros.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-img-overlay">
                        <hr>
                        <h5 class="titulocard">NOSOTROS</h5>
                    </div>
                </div>
            </div></a>



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
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <hr>
                <b>
                    <h6>Top de los 10 usuarios más recientes</h6>
                </b>

            </div>
        </div>
    </div>
</div>
<br>
@endsection