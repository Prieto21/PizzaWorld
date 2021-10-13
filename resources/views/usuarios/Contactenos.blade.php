@extends('layout.layoutUser')
@section('contenido')
<br><br>
<div class="container-fluid ContNosotros">
    <br>
    <h1 class="textPrincipal">Contáctenos</h1>

    <center>

        <div class="cardContactenos mb-3">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="{{ asset('imagenes/contactenos.jpg') }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h2 class="card-title">Ingresa Tus Datos</h2>
                        
                        <hr>
<br>
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" style="display: flex; justify-content:flex-start;" class="form-label">Nombres Y Apellidos</label>
                                <input type="text" class="form-control" placeholder="Ingrese su nombre" id="exampleInputEmail1" aria-describedby="emailHelp">
                                
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" style="display: flex; justify-content:flex-start;" class="form-label">Gmail</label>
                                <input type="text" class="form-control" placeholder="Ingrese su correo" id="exampleInputEmail1" aria-describedby="emailHelp">
                                
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" style="display: flex; justify-content:flex-start;" class="form-label">Mensaje</label>
                                <textarea class="form-control" aria-label="With textarea" placeholder="Comentanos..."></textarea>
                                
                            </div>
                            <br>
                            
                            <button type="button" class="btn btn-outline-warning" style="width: 20rem;">Enviar</button>
                            <br><br><br><br><br><br><br><hr>
                            
                            <h6 class="card-title" style="display: flex; justify-content:flex-start;">¡Gracias Por Tu Mensaje!</h6>
                            <h6 class="card-title" style="display: flex; justify-content:flex-start;">Pronto Nos Comunicaremos Contigo - WOP.</h6>
                            
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </center>



    <br><br>
</div>
@endsection