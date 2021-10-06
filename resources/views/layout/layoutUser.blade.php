<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">



    <!-- css y java link inicio -->
    <link rel="stylesheet" href="{{ asset('css/stylesUser.css') }}">
    <script src="https://kit.fontawesome.com/2b14a6eef6.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- css y java link  fin -->


    <title>World of pizza</title>
</head>
<!-- NAVEGACION INICIO -->
<nav class="navbar navbar-light navbarbg fixed-top">
    <div class="container-fluid">
        <a class="text_navbar" href="http://52.14.138.109:81/PizzaWorld/User">Inicio</a>
        <a class="text_navbar" href="http://localhost:8000/PizzaWorld/UserFav">Favoritos</a>
        <a class="text_navbar" href="#">Loading...<i class="fas fa-tools"></i></a>



        <!-- BOTON PARA SIDE BAR -->
        <button class="navbar-toggler btnside" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">

            <i class="fas fa-bars"></i>
        </button>
        <!-- BOTON PARA SIDE BAR -->



        <div class="offcanvas offcanvas-end " style="background-color: rgba(230, 230, 230, 0.6);" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header " style="background-color: rgba(230, 230, 230, 0.6);">
                <a class="text_navbar" href="http://52.14.138.109:81/PizzaWorld/UserOut">
                    <!-- <a class="text_navbar" href="http://localhost:8000/PizzaWorld/UserOut"> -->
                    <h5 class="offcanvas-title " id="offcanvasNavbarLabel">
                        <i class="fas fa-door-open " style="color: red;"></i>
                        Cerrar Sesión

                    </h5>
                </a>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>

            </div>

            <div class="offcanvas-body " style="background-color: rgba(230, 230, 230, 0.6);">

                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-pizza-slice"></i>&nbsp Pizzas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-ice-cream"></i>&nbsp Postres </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-cocktail"></i>&nbsp Bebidas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-headset"></i>&nbsp Contactenos</a>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="#">
                            <i class="fas fa-users"></i>&nbsp Nosotros</a>
                    </li>



                </ul>
                <br><br><br><br><br><br><br><br><br><br><br><br><br>
                <hr>
                <div class="ubicacion">
                    <!-- <a class="textPerfil" href="http://52.14.138.109:81/PizzaWorld/UserPerfil"> -->
                    <a class="textPerfil" href="http://localhost:8000/PizzaWorld/UserPerfil">

                        <i class="far fa-user-circle"></i>
                        Perfil
                    </a>
                </div>


            </div>
        </div>
    </div>
</nav>

<!-- NAVEGACION FINAL -->

<body class="body">

    @yield('contenido')






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