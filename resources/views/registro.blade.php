@extends('layout.layoutPrincipal')
@section('contenido')

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

   
    @endsection