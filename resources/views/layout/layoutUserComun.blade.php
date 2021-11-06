<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Italianno&family=Lobster&display=swap" rel="stylesheet">

    <!-- css y java link inicio -->
    <link rel="stylesheet" href="{{ asset('css/styleUserComun.css') }}">
    <script src="https://kit.fontawesome.com/2b14a6eef6.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- css y java link  fin -->
<!-- ICONO DE NAVEGADOR -->
<link rel="shortcut icon" href="https://i.pinimg.com/originals/ae/ae/4e/aeae4ead932a81071dec412d33491acd.png" />
<!-- ICONO DE NAVEGADOR -->

    <title>World of pizza</title>
</head>
<!-- NAVEGACION INICIO -->
<nav class="navbar navbar-light navbarbg fixed-top">
    <div class="container-fluid">
    <div class="IconoNav"><p>W</p><img src="{{ asset('imagenes/Icono_pagina.png') }}" ><p>P</p></div>
        <a class="text_navbar" href="{{url('/PizzaWorld/UserCo')}}">Inicio <i class="fas fa-home"></i></a>
        <a class="text_navbar" href="{{url('/PizzaWorld/ContactenosCo')}}">Contactenos <i class="fas fa-headset"></i></a>
        <a class="text_navbar" href="{{url('/PizzaWorld/NosotrosCo')}}">Nosotros <i class="fas fa-users"></i></a>
        <a class="text_navbar" href="{{url('/PizzaWorld/ClasesOnlineCo')}}">Clases En Línea <i class="fas fa-chalkboard-teacher"></i></a>
        



        <!-- BOTON PARA SIDE BAR -->
        <button class="navbar-toggler btnside" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">

            <i class="fas fa-bars"></i>
        </button>
        <!-- BOTON PARA SIDE BAR -->


        <div class="offcanvas offcanvas-end " style="background-color: rgba(230, 230, 230, 0.6);" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header " style="background-color: rgba(230, 230, 230, 0.6);">
                
                    <a class="text_navbar" href="{{url('/PizzaWorld/UserOut')}}">
                    <h5 class="offcanvas-title " id="offcanvasNavbarLabel">
                        <i class="fas fa-door-open " style="color: red;"></i>
                        Salir

                    </h5>
                </a>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                
            </div>

            <div class="offcanvas-body " style="background-color: rgba(230, 230, 230, 0.6);">

                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/PizzaWorld/Receta_PizzasCo')}}"><i class="fas fa-pizza-slice"></i>&nbsp Pizzas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/PizzaWorld/Receta_PostresCo')}}"><i class="fas fa-ice-cream"></i>&nbsp Postres </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/PizzaWorld/Receta_BebidasCo')}}">
                            <i class="fas fa-cocktail"></i>&nbsp Bebidas</a>
                    </li>
          



                </ul>
                
                
           
<hr>

            </div>
        </div>
    </div>
</nav>

<!-- NAVEGACION FINAL -->

<body class="body">

    @yield('contenido')


    <!-- INICIO DE PIE DE PAGINA -->
    <div class="container-fluid contentRecetas">
        <br>
        <h5 class="textFin">© 2021 WorldOfPizza.SAS - Página Desarrollada Por Sergio Prieto </h5>
        <hr>
        
        <figure class="redesSociales">
            <a class="redeslink" href="https://web.facebook.com/"><i class="fab fa-facebook face"></i></a>
            <a class="redeslink" href="https://www.youtube.com/"><i class="fab fa-youtube you"></i></a>
            <a class="redeslink" href="https://web.whatsapp.com/"><i class="fab fa-whatsapp what"></i></a>
            <a class="redeslink" href="https://www.instagram.com/"><i class="fab fa-instagram inst"></i></a>
            <a class="redeslink" href="https://mail.google.com/"><i class="fab fa-google-plus-g gmail"></i></a>
            
            
        </figure>
        <br>
    </div>
    <!-- CIERRE DE PIE DE PAGINA -->



    <!-- <script>
        $("button").on('click', function() {
            $(".containers").toggleClass("show");
        });
       
    </script> -->






    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>