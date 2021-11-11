@extends('layout.layoutUser')
@section('contenido')
<br><br>
<div class="container-fluid ContNosotros">
    <h1 class="textPrincipal">Perfil</h1>
    <div class="container contenedor_Perfil">
        <center>
        @foreach($perfilUser as $info )
            <div class="cardPerfil mb-3" style="max-width: 540px;">
                <br>

                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="/imagenes/{{$info->foto}}" class="img-fluid rounded-start" alt="...">

                        <hr>
                        <center>
                            <h5 class="card-title">{{$info->nombres}} {{$info->apellidos}}</h5>
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
                                            <h5 class="card-title">Usuario:</h5>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                        <td>
                                            <p class="card-text">
                                                <center>{{$info->user}}</center>
                                            </p>
                                        </td>

                                    </tr>

                                    <tr>

                                        <td>
                                            <h5 class="card-title">Contraseña:</h5>

                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <p class="card-text">
                                                <center>{{$info->contra}}</center>
                                            </p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <h5 class="card-title">Gmail:</h5>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <p class="card-text">
                                                <center>{{$info->email}}</center>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5 class="card-title">Sexo:</h5>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <p class="card-text">
                                                <center>{{$info->sexo}}</center>
                                            </p>
                                        </td>
                                    </tr>
                                    <br>
                                    <tr>
                                        <td>
                                            <h5 class="card-title">Edad:</h5>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <p class="card-text">
                                                <center>{{$info->edad}}</center>
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </center>






                            <br><br>


                            <!-- Button trigger modal -->
                            <center><button type="button" class="btne btn1" data-bs-toggle="modal" data-bs-target="#infoUser{{$info->id}}">
                                    MODIFICAR <i class="fas fa-user-edit"></i>
                                </button></center>


                            <!-- Modal -->
                            <div class="modal fade" id="infoUser{{$info->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">

                                    <div class="modal-content">

                                        <div class="modal-body contentModal">
                                        <form action="{{route('User.update',$info->id)}}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <h1>Modificar Información</h1>
                                                <hr>
                                              
                                                <div class="row g-0">
                                                    <div class="col-md-5">
                                                        <p>Foto Actual</p>
                                                        <img src="/imagenes/{{$info->foto}}" style="max-width: 10rem;padding:2%">
                                                        <hr>
                                                        <div style="display: flex; justify-content:center;">
                                                            <p>Cargar Nueva Foto: "</p> <input type="file" value="{{$info->foto}}" required name="foto" class="form-control" id="inputGroupFile01" style="max-width:6rem;max-height:2px; margin-top: 1.5%;">
                                                            <p>"</p>
                                                        </div>

                                                        <center>

                                                            <div style="display: flex; justify-content:center;">
                                                                <input type="text" class="form-control" name="nombres" value="{{$info->nombres}}" required>&nbsp
                                                                <input type="text" class="form-control" name="apellidos" value="{{$info->apellidos}}" required>
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
                                                                            <h5 class="card-title">Usuario:</h5>
                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>

                                                                        <td>
                                                                            <p class="card-text">

                                                                                <input type="text" class="form-control" name="user" value="{{$info->user}}" required>
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
                                                                            <h5 class="card-title">Contraseña:</h5>

                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>
                                                                            <p class="card-text">

                                                                                <input type="text" class="form-control" name="contra" value="{{$info->contra}}" required>
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
                                                                            <h5 class="card-title">Gmail:</h5>
                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>
                                                                            <p class="card-text">

                                                                                <input type="text" class="form-control" name="email" value="{{$info->email}}" required>
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
                                                                            <h5 class="card-title">Sexo:</h5>
                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>
                                                                            <p class="card-text">
                                                                                <select class="form-select" name="id_sexo" aria-label="Default select example" required>
                                                                                    <option hidden selected> {{$info->sexo}}</option>
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
                                                                            <h5 class="card-title">Edad:</h5>
                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>
                                                                            <p class="card-text">

                                                                                <input type="text" class="form-control" name="edad" value="{{$info->edad}}" required>
                                                                                <input type="text" name="id_rol" value="2" hidden>
                                                                                
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
                            <!-- CIERRE DE MODAL -->

                        </div>
                    </div>
                </div>

            </div>
            @endforeach
        </center>


    </div>
    <br>
</div>



@endsection