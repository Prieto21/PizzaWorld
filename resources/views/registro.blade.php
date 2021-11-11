@extends('layout.layoutPrincipal')
@section('contenido')

<body class="body">
    <br><br><br><br>
    <center>

        <div class="contenedorlogin">

        <form action="{{route('User.store')}}" method="POST">
                        @csrf
                <h1>Registro</h1>
                <hr><br>
                <!-- NOMBRE COMPLETO -->
                <div class="row g-2">
                    <div class="col-md">
                        <div class="input-group mb-3">

                            <input type="text"  name="nombres" class="form-control" placeholder="Nombres" aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="input-group mb-3">

                            <input type="text" required name="apellidos" class="form-control" placeholder="Apellidos" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>

                <!-- USUARIO (imput de dos en dos) -->
                <div class="row g-2">
                    <div class="col-md">
                        <div class="input-group mb-3">

                            <input type="text" name="user" required class="form-control" placeholder="Usuario" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="input-group mb-3">

                            <input type="password" name="contra" required class="form-control" placeholder="Contraseña" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>

                <!-- Email y edad -->

                <div class="row g-2">
                    <div class="col-md-9">
                        <div class="input-group mb-3">

                            <input type="text"  name="email" required class="form-control" placeholder="Correo Electronico" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group mb-3">

                            <input type="text" name="edad" required class="form-control" placeholder="Edad" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>

                <!-- Ultimos datos -->
                <div class="row g-2">
                    <div class="col-md">
                        <div class="input-group mb-3">


                            <label for="formFileSm" class="form-label">Foto De Perfil</label> &nbsp
                            <input required name="foto" class="form-control form-control-sm" id="formFileSm" type="file">
                            <input name="id_rol" value="2" hidden>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="input-group mb-3">

                            <select class="form-select" name="id_sexo" aria-label="Default select example">
                                <option value="3" selected>Sexo</option>
                                <option value="2">Hombre</option>
                                <option value="1">Mujer</option>
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
                
                
                
                <!-- <a href="{{url('/PizzaWorld/User')}}"> -->
                    <button type="submit" class="btn btn1 ">Crear</button>
                <!-- </a> -->

            </form>
            
            <a class="link_registro" href="{{url('/PizzaWorld/login')}}">
                Atras
            </a>
        </div>

<br><br><br>
    </center>

   
    @endsection