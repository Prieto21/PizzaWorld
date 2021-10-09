@extends('layout.layoutUser')
@section('contenido')
<br><br>

<h1 class="textPrincipal">Perfil</h1>
<div class="container contenedor_Perfil">
    <div class="infoPerfil">
        <i class="far fa-user iconUser"></i>
        <hr>
        <p>Nombre: Oliver Jack James.</p>
        <p>Edad: 32 Años.</p>
        <p>Usuario: Pepe_23.</p>
        <p>Contraseña: 123456 .</p>
        <p>Correo: Oliver132@gmail.com .</p>
        <p>Sexo: Hombre.</p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            MODIFICAR <i class="fas fa-user-edit"></i>
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="background-color: rgba(255, 255, 255, 0.900);">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modificar Información <i class="fas fa-id-card"></i></h5>
                      
                    </div>
                    <div class="modal-body contentModal">
                        <i class="far fa-user iconUser"></i><br><br>
                        <div class="input-group mb-3" >

                            <input type="file" class="form-control" id="inputGroupFile01">
                        </div>
                        <hr>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Nombre:</span>
                            <input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" value="Oliver Jack ">
                        </div>
                        <br>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Apellidos:</span>
                            <input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" value="James">
                        </div>
                        <br>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Edad:</span>
                            <input type="text" class="form-control" value="32" aria-label="Username" aria-describedby="addon-wrapping">
                        </div><br>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Usuario</span>
                            <input type="text" class="form-control" value="Pepe_23" aria-label="Username" aria-describedby="addon-wrapping">
                        </div><br>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Contraseña:</span>
                            <input type="text" class="form-control" value="123456" aria-label="Username" aria-describedby="addon-wrapping">
                        </div><br>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Gmail:</span>
                            <input type="text" class="form-control" value="Oliver132@gmail.com" aria-label="Username" aria-describedby="addon-wrapping">
                        </div><br>
                        <div class="input-group flex-nowrap">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Sexo</option>
                                <option value="1">Hombre</option>
                                <option value="2">Mujer</option>
                                <option value="3">Otro</option>
                            </select>
                        </div><br>
<hr>
                        <div >
                        <button type="button" class="btn2" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn3">Modificar</button>
                    </div>



                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</div>
<br>




@endsection