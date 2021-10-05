<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>World of pizza</title>
</head>

<body class="body">
    <br><br><br><br>
    <center>

        <div class="contenedorlogin">

            <form>
                <h1>Registro</h1>
                <hr><br>
                <!-- NOMBRE COMPLETO -->
                <div class="row g-2">
                    <div class="col-md">
                        <div class="input-group mb-3">

                            <input type="text"  class="form-control" placeholder="Nombres" aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="input-group mb-3">

                            <input type="text" required class="form-control" placeholder="Apellidos" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>

                <!-- USUARIO (imput de dos en dos) -->
                <div class="row g-2">
                    <div class="col-md">
                        <div class="input-group mb-3">

                            <input type="text" required class="form-control" placeholder="Usuario" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="input-group mb-3">

                            <input type="text" required class="form-control" placeholder="Contraseña" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>

                <!-- Email -->

                <div class="input-group mb-3">

                    <input type="text" required class="form-control" placeholder="Correo Electronico" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <!-- Ultimos datos -->
                <div class="row g-2">
                    <div class="col-md">
                        <div class="input-group mb-3">


                            <label for="formFileSm" class="form-label">Foto De Perfil</label> &nbsp
                            <input required class="form-control form-control-sm" id="formFileSm" type="file">
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="input-group mb-3">

                            <select class="form-select" aria-label="Default select example">
                                <option selected>Sexo</option>
                                <option value="1">Hombre</option>
                                <option value="2">Mujer</option>
                                <option value="3">Otro</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <div class="contenedor_terminos">
                <p>Acepto Los Terminos</p>
                <div class="form-check form-switch">
                    
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked required>
                    
                </div>
                </div>
                
                
                <a href="http://52.14.138.109:81/PizzaWorld/User">
                <!-- <a href="http://localhost:8000/PizzaWorld/User"> -->
                    <button type="button" class="btn btn1 ">Crear</button>
                </a>

            </form>
            <a class="link_registro" href="http://52.14.138.109:81/PizzaWorld/login">
            <!-- <a class="link_registro" href="http://localhost:8000/PizzaWorld/login"> -->
                Atras
            </a>
        </div>

<br><br><br>
    </center>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>