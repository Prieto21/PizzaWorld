@extends('layout.layoutAdmin')
@section('contenido')
<br><br>
<div class="container">
    <div class="contorno-recetas">
        <h1 class="textPrincipal">Recetas </h1>
        <hr>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <img src="{{ asset('imagenes/Icono_pagina.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nombre: Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <hr>
                        <center>
                            <div class="buttonsRecetas">
                                <button type="button" class="btn btn-outline-primary" style="width: 25%;" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="far fa-edit"></i></button>
                                <button type="button" class="btn btn-outline-danger" style="width: 25%;"><i class="fas fa-trash"></i></button>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{ asset('imagenes/Icono_pagina.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nombre: Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <hr>
                        <center>
                            <div class="buttonsRecetas">
                                <button type="button" class="btn btn-outline-primary" style="width: 25%;" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="far fa-edit"></i></button>
                                <button type="button" class="btn btn-outline-danger" style="width: 25%;"><i class="fas fa-trash"></i></button>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{ asset('imagenes/Icono_pagina.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nombre: Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <hr>
                        <center>
                            <div class="buttonsRecetas">
                                <button type="button" class="btn btn-outline-primary" style="width: 25%;" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="far fa-edit"></i></button>
                                <button type="button" class="btn btn-outline-danger" style="width: 25%;"><i class="fas fa-trash"></i></button>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{ asset('imagenes/Icono_pagina.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nombre: Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <hr>
                        <center>
                            <div class="buttonsRecetas">
                                <button type="button" class="btn btn-outline-primary" style="width: 25%;" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="far fa-edit"></i></button>
                                <button type="button" class="btn btn-outline-danger" style="width: 25%;"><i class="fas fa-trash"></i></button>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{ asset('imagenes/Icono_pagina.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nombre: Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <hr>
                        <center>
                            <div class="buttonsRecetas">
                                <button type="button" class="btn btn-outline-primary" style="width: 25%;" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="far fa-edit"></i></button>
                                <button type="button" class="btn btn-outline-danger" style="width: 25%;"><i class="fas fa-trash"></i></button>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{ asset('imagenes/Icono_pagina.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nombre: Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <hr>
                        <center>
                            <div class="buttonsRecetas">
                                <button type="button" class="btn btn-outline-primary" style="width: 25%;" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="far fa-edit"></i></button>
                                <button type="button" class="btn btn-outline-danger" style="width: 25%;"><i class="fas fa-trash"></i></button>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <center>
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-body contentModal">
                            <hr>
                            <h1 style="color: white;">PROCESO... DB</h1>
                            <hr><button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cerrar</button>
                        </div>

                    </div>
                </div>
            </div>
            </center>
        </div>
        <br>
       
    </div>
</div>
@endsection