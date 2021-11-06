@extends('layout.layoutAdmin')
@section('contenido')
<br><br>
<div class="contenedor-mensajes">
    <!-- <h1 class="textPrincipal">Mensajería </h1> -->
    <h1 class="titulomensaje">Mensajería </h1>
    <hr>
    <div class="row rowmensajes">
        <div class="col-sm-3 chat">
            <div class="overflow-auto mensajesabajo">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Chats</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mark</td>
                        </tr>
                        <tr>
                            <td>Thornton</td>
                        </tr>
                        <tr>
                            <td>Thornton</td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                        </tr>
                        <tr>
                            <td>Thornton</td>
                        </tr>
                        <tr>
                            <td>Thornton</td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                        </tr>
                        <tr>
                            <td>Thornton</td>
                        </tr>
                        <tr>
                            <td>Thornton</td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                        </tr>
                        <tr>
                            <td>Thornton</td>
                        </tr>
                        <tr>
                            <td>Thornton</td>
                        </tr>
                        <tr>
                            <td>Thornton</td>
                        </tr>
                        <tr>
                            <td>Thornton</td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                        </tr>
                        <tr>
                            <td>Thornton</td>
                        </tr>
                        <tr>
                            <td>Thornton</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-9 chat">
            <div class="overflow-auto conversacion">
                <div class="mensajeusuario">
                    <div class="card-mensajes text-dark bg-light mb-3" style="max-width: 18rem;">

                        <div class="card-body">
                            <img src="{{ asset('imagenes/profile.jfif') }}"> Sara Martinez
                            <hr>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

                <div class="mensajeAdmin">
                    <div class="card-mensajes-Admin text-white bg-dark mb-3" style="max-width: 18rem;">

                        <div class="card-body">
                            <img src="{{ asset('imagenes/SEO.jpeg') }}"> Sergio Prieto
                            <hr>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

                <div class="mensajeusuario">
                    <div class="card-mensajes text-dark bg-light mb-3" style="max-width: 18rem;">

                        <div class="card-body">
                            <img src="{{ asset('imagenes/profile.jfif') }}"> Sara Martinez
                            <hr>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="mensajeAdmin">
                    <div class="card-mensajes-Admin text-white bg-dark mb-3" style="max-width: 18rem;">

                        <div class="card-body">
                            <img src="{{ asset('imagenes/SEO.jpeg') }}"> Sergio Prieto
                            <hr>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="mensajeusuario">
                    <div class="card-mensajes text-dark bg-light mb-3" style="max-width: 18rem;">

                        <div class="card-body">
                            <img src="{{ asset('imagenes/profile.jfif') }}"> Sara Martinez
                            <hr>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="mensajeAdmin">
                    <div class="card-mensajes-Admin text-white bg-dark mb-3" style="max-width: 18rem;">

                        <div class="card-body">
                            <img src="{{ asset('imagenes/SEO.jpeg') }}"> Sergio Prieto
                            <hr>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="mensajeusuario">
                    <div class="card-mensajes text-dark bg-light mb-3" style="max-width: 18rem;">

                        <div class="card-body">
                            <img src="{{ asset('imagenes/profile.jfif') }}"> Sara Martinez
                            <hr>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="mensajeAdmin">
                    <div class="card-mensajes-Admin text-white bg-dark mb-3" style="max-width: 18rem;">

                        <div class="card-body">
                            <img src="{{ asset('imagenes/SEO.jpeg') }}"> Sergio Prieto
                            <hr>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="responder">
                    <textarea class="responder-mensajes" placeholder="Responder..."></textarea>
                    <button type="button" class="btn btn-outline-success">ENVIAR</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection