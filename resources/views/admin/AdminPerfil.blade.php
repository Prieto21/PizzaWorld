@extends('layout.layoutAdmin')
@section('contenido')
<br><br>
<div class="container-fluid ContNosotros">
    <h1 class="textPrincipal">Perfil</h1>
    <div class="container contenedor_Perfil">
        <center>
            <div class="cardPerfil mb-3" style="max-width: 540px;">
                <br>

                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="{{ asset('imagenes/SEO.jpeg') }}" class="img-fluid rounded-start" alt="...">

                        <hr>
                        <center>
                            <h5 class="card-title">Sergio Alejandro Prieto Molano</h5>
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
                                                <center>Prieto21</center>
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
                                                <center>Admin1234</center>
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
                                                <center>sergio_prietomo@fet.edu.co</center>
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
                                                <center>Hombre</center>
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
                                                <center>20</center>
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </center>






                            <br><br>


                            <!-- Button trigger modal -->
                            <center><button type="button" class="btne btn1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    MODIFICAR <i class="fas fa-user-edit"></i>
                                </button></center>


                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">

                                    <div class="modal-content">

                                        <div class="modal-body contentModal">
                                            <form>
                                                <h1>Modificar Información</h1>
                                                <hr>
                                              
                                                <div class="row g-0">
                                                    <div class="col-md-5">
                                                        <p>Foto Actual</p>
                                                        <img src="{{ asset('imagenes/SEO.jpeg') }}" style="max-width: 10rem;padding:2%">
                                                        <hr>
                                                        <div style="display: flex; justify-content:center;">
                                                            <p>Cargar Nueva Foto: "</p> <input type="file" class="form-control" id="inputGroupFile01" style="max-width:6rem;max-height:2px; margin-top: 1.5%;">
                                                            <p>"</p>
                                                        </div>

                                                        <center>

                                                            <div style="display: flex; justify-content:center;">
                                                                <input type="text" class="form-control" value="Sergio Alejandro">&nbsp
                                                                <input type="text" class="form-control" value="Prieto Molano">
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

                                                                                <input type="text" class="form-control" value="Prieto21">
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

                                                                                <input type="text" class="form-control" value="Admin1234">
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

                                                                                <input type="text" class="form-control" value="sergio_prietomo@fet.edu.co">
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
                                                                                <select class="form-select" aria-label="Default select example">
                                                                                    <option selected>Sexo</option>
                                                                                    <option value="1">Hombre</option>
                                                                                    <option value="2">Mujer</option>
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

                                                                                <input type="text" class="form-control" value="20">
                                                                            </p>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </center>
                                                            <br><br>
                                                            <div>
                                                                <button type="button" class="btn2" data-bs-dismiss="modal">Cerrar</button>
                                                                <button type="button" class="btn3">Modificar</button>
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
        </center>


    </div>
    <br>
</div>



@endsection