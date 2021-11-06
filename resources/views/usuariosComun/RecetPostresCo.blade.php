@extends('layout.layoutUserComun')
@section('contenido')
<br><br>

<div class="container-fluid ContNosotros">
    <h1 class="textPrincipal">Postres</h1>
    <div class="container-fluid ContRecet">
        <br>
        <hr>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <center> <img src="{{ asset('imagenes/Icono_pagina.png') }}" class="card-img-top" style="max-width: 15rem;" alt="...">
                        <hr>
                    </center>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                        <center><button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#MensajePremium" style="width: 7rem;">
                                Ver Más <i class="far fa-eye"></i>
                            </button></center>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <center><img src="{{ asset('imagenes/Icono_pagina.png') }}" class="card-img-top" style="max-width: 15rem;" alt="...">
                        <hr>
                    </center>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <center><button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#MensajePremium" style="width: 7rem;">
                                Ver Más <i class="far fa-eye"></i>
                            </button></center>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <center><img src="{{ asset('imagenes/Icono_pagina.png') }}" class="card-img-top" style="max-width: 15rem;" alt="...">
                        <hr>
                    </center>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <center><button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#MensajePremium" style="width: 7rem;">
                                Ver Más <i class="far fa-eye"></i>
                            </button></center>
                    </div>
                </div>
            </div>

        </div>
        <!-- Modal -->
        <div class="modal fade" id="MensajePremium"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                   
                    <div class="modal-body contentModal">
                        <center><h1>¡Vuélvete Miembro De Pizza Of World!</h1></center>
                        
                        <hr>
                        <h4>Tendras cientos de beneficios tales como: <br></h4>
                        <br>
                        
                        <p class="pText">
                        - Todos los videos de las clases online. <br> <br>
                        - Ver todas las recetas completas. <br> <br>
                        - Agregar las recetas que más te gusten a tus favoritos.    <br> <br>
                        - Control total sobre tu perfil. <br>
                        </p>
                        <br><hr>
                        <center>
                            <a href="{{url('/PizzaWorld/registro')}}">
                            <button type="button" class="btne btn1">
                                    <h1>
                                        REGISTRARME 
                                    </h1>
                                </button>
                            </a>
                        </center>
        
                    </div>
                   
                </div>
            </div>
        </div>
        <br>


    </div>
    <br><br>
</div>
</div>




@endsection