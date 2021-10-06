@extends('layout.layoutUser')
@section('contenido')
<br><br>
<!-- CARRUSEL -->
<div class="container">
        <br>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                        <div class="carousel-item active carruselcontent">
                                <img src="{{ asset('imagenes/carrusel1.jpg') }}" class="d-block w-100 carrusel1">
                                <div class="carousel-caption d-none d-md-block">
                                        <h5 class="textcarrusel">En WOP siempre es un buen momento para aprender</h5>

                                </div>
                        </div>
                        <div class="carousel-item carruselcontent">
                                <img src="{{ asset('imagenes/carrusel2.jpg') }}" class="d-block w-100 carrusel2">
                                <div class="carousel-caption d-none d-md-block">
                                        <h5 class="textcarrusel">Aprovecha nuestras variedades en recetas</h5>

                                </div>
                        </div>
                        <div class="carousel-item carruselcontent">
                                <img src="{{ asset('imagenes/carrusel3.jpg') }}" class="d-block w-100 carrusel3">
                                <div class="carousel-caption d-none d-md-block">
                                        <h5 class="textcarrusel">No te pierdas ninguna de nuestras clases en linea</h5>
                                </div>
                        </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                </button>
        </div>
        <br>
</div>
<!-- FIN DEL CARRUSEL -->


<!-- CUERPO DE RECETAS -->

<div class="container-fluid contentRecetas">
<br>
<center><h3 style="font-size: 45px;">Recetas</h3></center>
<hr>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>
<br>
</div>
<!-- CIERRE DE CUERPO DE RECETAS -->

@endsection