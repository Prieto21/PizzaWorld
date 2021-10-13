@extends('layout.layoutUser')
@section('contenido')
<br><br>
<!-- CARRUSEL -->
<div class="container-fluid">
  <br>
  <h1 class="textPrincipal">World Of Pizza</h1>
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
        <img src="{{ asset('imagenes/carrusel3.jpg') }}" height="700px" class="d-block w-100 carrusel3">
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
  <center>
    <h3 style="font-size: 45px;">Recetas</h3>
  </center>
  <hr>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <a href="{{url('/PizzaWorld/Receta_Bebidas')}}">
        <div class="contenedor">
          <figure>
            <img src="{{ asset('imagenes/opcion2.jpg') }}" alt="">
            <div class="capa">
              <h3>BEBIDAS</h3>
              <p>¡Variedad en bebidas! <br> Porque ninguna increible historia empieza con una ensalada. </p>
            </div>
          </figure>

        </div>
      </a>
    </div>
    <div class="col">
      <a href="{{url('/PizzaWorld/Receta_Pizzas')}}">
        <div class="contenedor">
          <figure>
            <img src="{{ asset('imagenes/opcion1.jpg') }}" alt="">
            <div class="capa">
              <h3>PIZZAS</h3>
              <p>Los buenos momentos son como las pizzas, siempre sabra mejor si compartes con amigos.</p>
            </div>
          </figure>

        </div>
      </a>
    </div>
    <div class="col">
      <a href="{{url('/PizzaWorld/Receta_Postres')}}">
        <div class="contenedor">
          <figure>
            <img src="{{ asset('imagenes/opcion3.jpg') }}" alt="">
            <div class="capa">
              <h3>POSTRES</h3>
              <p>Cocinar con amor, alimenta el alma <br> y un buen postre endulza tu vida.</p>
            </div>
          </figure>

        </div>
      </a>
    </div>
  </div>
  <br>
</div>

<!-- CIERRE DE CUERPO DE RECETAS -->
<div class="container-fluid contentRecetasDos">
  <br><br><br><br><br>
  <center>
    <p>¡Una receta no tiene alma, sin un cocinero apasionado!</p> <br>
    <p class="autortext">-World Of Pizza.</p>
  </center>
  <br><br><br><br><br>
</div>
<!-- INICIO DE TIENDA FISICA -->
<div class="container-fluid contentRecetas">
  <br>
  <center>
    <h3 style="font-size: 45px;">Tienda Física</h3>
  </center>
  <hr>
  <div class="textubicacion">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31876.87382180457!2d-75.26831661165615!3d2.9281233793835706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3b7464ac59aa5b%3A0x7e513d68543b6eec!2sDomino&#39;s%20P%C3%AFzza%20Las%20Brisas!5e0!3m2!1ses!2sco!4v1633620978541!5m2!1ses!2sco" width="1330" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


    <p>
      Visita nuestros puntos fisicos al rededor del mundo...
    </p> <br>
    <p class="textosecond">
      -World Of Pizzas
    </p>
  </div>

  <br><br>
</div>
<br>
<!-- CIERRE DE TIENDA FISICA -->
<div class="container-fluid contentRecetas">

  <br><br>
  <div class="contentClass">
    <h1>¡Clases en Linea, Totalmente gratis! <br> No esperes más y mira +100 videos para ti... </h1>
    <img src="{{ asset('imagenes/clasesonline.jpg') }}" alt="">
  </div>
  <br>
  <div class="container" style="max-width: 78rem; ">
    <div class="row">
      <div class="col-sm-6">
        <div class="contentextra">
          <div class="card">
            <div class="card-body">
              <figure class="calif">
                <h5 class="card-title">Somos la pagina numero 1 en recetas </h5>



              </figure>
              <hr>
              <figure class="start" style="display: flex; justify-content:space-around;">
                <i class="fas fa-star"></i>&nbsp
                <i class="fas fa-star"></i>&nbsp
                <i class="fas fa-star"></i>&nbsp
                <i class="fas fa-star"></i>&nbsp
                <i class="fas fa-star"></i>
              </figure>




            </div>
          </div>
        </div>
      </div>


      <div class="col-sm-6">
        <div class="contentextra">
          <br>
          <div class="row g-0">

            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">24 hrs</h5>

                <p class="card-text"> Servicio al cliente las 24 horas del dia.</p>

              </div>
            </div>
            <div class="col-md-4">
              <i class="fas fa-user-clock" style="display: flex;
               align-self: center; font-size: 92px;"></i>
            </div>
          </div>
          <br>
        </div>

      </div>
    </div>
    <br>

    <center>
      <div class="row">
        <div class="col-sm-12">
          <div class="contentSEO">
            <h2>SEO</h2>
            <img src="{{ asset('imagenes/SEO.jpeg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <hr>
              <h5>Sergio Alejandro Prieto Molano</h5>
              <p class="card-text">Creador de World Of Pizza</p>
            </div>

          </div>
        </div>
      </div>
    </center>

  </div>
  <br>
  <br><br>
</div>





@endsection