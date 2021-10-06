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
<nav class="navbar navbar-expand-lg navbar-light navbarbg">
    <div class="container-fluid">
        <button class="btn_sidebar">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </button>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <!-- <a class="nav-link " aria-current="page" href="http://52.14.138.109:81/PizzaWorld/User">Inicio</a> -->
                    <a class="nav-link " aria-current="page" href="http://localhost:8000/PizzaWorld/User">Inicio</a>
                </li>

                <li class="nav-item">
                    <!-- <a class="nav-link" href="http://52.14.138.109:81/PizzaWorld/UserFav">Favoritos</a> -->
                    <a class="nav-link" href="http://localhost:8000/PizzaWorld/UserFav">Favoritos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Under Construction
                        <i class="fas fa-tools"></i>
                    </a>
                    <ul class="dropdown-menu navbarbg" aria-labelledby="navbarDropdown ">
                        <li><a class="dropdown-item" href="#">................................
                        <i class="fas fa-toolbox"></i>
                            </a></li>
                        <li><a class="dropdown-item" href="#">................................
                        <i class="fas fa-toolbox"></i>
                            </a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">................................
                        <i class="fas fa-toolbox"></i>
                            </a></li>
                    </ul>
                </li>

            </ul>





            <li class="nav-item dropdown list">
                <a class="nav-link dropdown-toggle linksesion" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    
                    Settings Prof...
                    <i class="fas fa-sliders-h"></i>
                </a>
                <ul class="dropdown-menu navbarbg" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                        <!-- <a class="dropdown-item" href="http://52.14.138.109:81/PizzaWorld/UserPerfil">Perfil</a> -->
                        <a class="dropdown-item" href="http://localhost:8000/PizzaWorld/UserPerfil">

                        <i class="far fa-user-circle"></i>
                            Perfil
                        </a>
                    </li>
                    <li>
                        <!-- <a class="dropdown-item" href="http://localhost:8000/PizzaWorld/UserOut"> -->
                        <a class="dropdown-item" href="http://52.14.138.109:81/PizzaWorld/UserOut">

                        <i class="fas fa-door-open" style="color: red;"></i>
                            Cerrar Sesión
                        </a>

                    </li>


        </div>
    </div>
</nav>
<!-- NAVEGACION FINAL -->

<body class="body">
    <section class="containers">
        <div class="sidebar">


            <ul>
                <li> <i class="fas fa-pizza-slice"></i>&nbsp Pizzas</li>
                <li><i class="fas fa-ice-cream"></i>&nbsp Postres</li>
                <li><i class="fas fa-cocktail"></i>&nbsp Bebidas</li>
                <li>
                <i class="fas fa-headset"></i>&nbsp Contactenos </li>
                <li>
                <i class="fas fa-users"></i>&nbsp Nosotros</li>
            </ul>
        </div>

        <div class="content">
            @yield('contenido')

        </div>

    </section>




    <script>
        $("button").on('click', function() {
            $(".containers").toggleClass("show");
        });
       
    </script>






    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>