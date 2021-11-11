@extends('layout.layoutAdmin')
@section('contenido')
<br><br>
<h1 class="textPrincipal">Comunidad </h1>
<div class="container" style="max-width: 90%;">
    <div class="contorno">

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($comunidad as $info )
            <div class="col">
                <div class="card-miembros h-100">
                
                    <img src="/imagenes/{{$info->foto}}" class="card-img-top" alt="...">

                    <center>
                        <h5 class="card-title"><b>{{$info->nombres}} {{$info->apellidos}}</b></h5>
                    </center>
                    <hr>
                    <div class="infomiembros" style="display: flex; justify-content:space-around;">
                        <div class="infor">
                            <b>Edad:</b> <br>
                            <b>Usuario:</b> <br>
                            <b>Gmail:</b> <br>
                            <b>Contraseña:</b> <br>
                            <b>Sexo:</b> <br>
                            <b>Rol:</b>
                        </div>
                        <div class="resulinfo">
                            {{$info->edad}} <br>
                            {{$info->user}} <br>
                            {{$info->email}}<br>
                            {{$info->contra}}<br>
                            {{$info->sex}}<br>
                            {{$info->rol}}
                        </div>
                    </div>
                    <hr>

                    <center>
                        <!-- Button trigger modal -->

                        <button type="button" class="btn btn-outline-primary" style="width: 15%; height:5%" data-bs-toggle="modal" data-bs-target="#infoAdmin{{$info->id}}"><i class="far fa-edit"></i></button>
                        <button type="button" class="btn btn-outline-danger"><i class="fas fa-user-minus" data-bs-toggle="modal" data-bs-target="#comunidaddelete{{$info->id}}"></i></button>
                    </center>


                </div>
                <center>
                    <!-- Modal -->
                    <div class="modal fade" id="comunidaddelete{{$info->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-body contentModal">
                                    <div class="modal-header">

                                        <button type="button" class="btn-close" style="background-color: white;" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <h1 style="color: white;">Seguro Que Quieres Eliminar Al Usuario </h1>
                                    <hr><b style="color: white;">{{$info->nombres}} </b> <br><br>
                                    <img src="/imagenes/{{$info->foto}}" style="max-width:8rem ;"><br>



                                    <form action="{{route('Admin.destroy', $info->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-outline-danger" data-bs-dismiss="modal" style="width: 20rem;">Eliminar</button>
                                    </form>


                                </div>

                            </div>
                        </div>
                    </div>
                </center>


<center>
                <!-- Modal Modificar -->
                <div class="modal fade" id="infoAdmin{{$info->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">

                        <div class="modal-content">

                            <div class="modal-body contentModal" style="max-width: 50rem; max-height:47rem;transform: translateX(8%);">
                                <form action="{{route('User.update',$info->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <h1 style="color: white;">Modificar Información</h1>
                                    <hr>

                                    <div class="row g-0">
                                        <div class="col-md-5">
                                            <p style="color: white;">Foto Actual</p>
                                            <img src="/imagenes/{{$info->foto}}"  style="max-width: 10rem;padding:2%">
                                            <hr>
                                            <div style="display: flex; justify-content:center;">
                                                <p style="color: white;">Cargar Nueva Foto: "</p> <input type="file" name="foto" required class="form-control" id="inputGroupFile01" style="max-width:6rem;max-height:2px; margin-top: 1.5%;">
                                                <p>"</p>
                                            </div>

                                            <center>

                                                <div style="display: flex; justify-content:center;">
                                                    <input type="text" class="form-control" name="nombres" value="{{$info->nombres}} ">&nbsp
                                                    <input type="text" class="form-control" name="apellidos" value="{{$info->apellidos}}">
                                                </div>
                                            </center>
                                        </div>
                                        <div class="col-md-1">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-body">
                                                <center>
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <h5 class="card-title" style="color: white;">Usuario:</h5>
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>

                                                            <td>
                                                                <p class="card-text">

                                                                    <input type="text" class="form-control" name="user" value="{{$info->user}}">
                                                                </p>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <br>
                                                            </td>
                                                        </tr>
                                                        <tr>

                                                            <td>
                                                                <h5 class="card-title" style="color: white;">Contraseña:</h5>

                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>
                                                                <p class="card-text">

                                                                    <input type="text" class="form-control" name="contra" value="{{$info->contra}}">
                                                                </p>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <br>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5 class="card-title" style="color: white;">Gmail:</h5>
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>
                                                                <p class="card-text">

                                                                    <input type="text" class="form-control" name="email" value="{{$info->email}}">
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <br>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5 class="card-title" style="color: white;">Sexo:</h5>
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>
                                                                <p class="card-text">
                                                                    <select class="form-select" name="id_sexo" aria-label="Default select example">
                                                                        <option hidden selected>{{$info->sex}}</option>
                                                                        <option value="2">Hombre</option>
                                                                        <option value="1">Mujer</option>
                                                                        <option value="3">Otro</option>
                                                                    </select>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <br>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5 class="card-title" style="color: white;">Edad:</h5>
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>
                                                                <p class="card-text" style="color: white;">

                                                                    <input type="text" class="form-control" name="edad" value="{{$info->edad}}">
                                                                    <input type="text" class="form-control" name="id_rol" value="{{$info->id_rol}}">
                                                                    <p style="color: white;">
                                                                        1.Admin &nbsp
                                                                        2.User
                                                                    </p>
                                                                    
                                                                
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </center>
                                                <br><br>
                                                <div>
                                                    <button type="button" class="btn2" data-bs-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn3">Modificar</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>




                                </form>

                            </div>

                        </div>

                    </div>
                </div>
                </center>
                <!-- CIERRE DE MODAL -->
            </div>
            @endforeach

        </div>
        <br> <br>


    </div>
</div>
<br>
@endsection