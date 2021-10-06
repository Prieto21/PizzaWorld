@extends('layout.layoutPrincipal')
@section('contenido')

<body class="body">
    <br><br><br><br><br><br><br>
    <center>
       
        <div class="contenedorlogin">
            
            <form >
            <h1>Login</h1>
            <hr><br>
                <!-- USUARIO -->
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                    <i class="fas fa-user"></i>
                    </span>
                    <input type="text"  class="form-control" placeholder="Usuario" aria-label="Username" aria-describedby="basic-addon1" required>
                </div>
                <br>
                <!-- CONTRASEÑA -->
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                    <i class="fas fa-lock"></i>
                    </span>
                    <input type="password" class="form-control" placeholder="Contraseña" aria-label="Username" aria-describedby="basic-addon1" required>
                </div>
                <br>
                <a href="http://52.14.138.109:81/PizzaWorld/User">
                <!-- <a href="http://localhost:8000/PizzaWorld/User"> -->
                <button type="button" class="btn btn1 ">Entrar</button>
                </a>
                
            </form>
            <a class="link_registro" href="http://52.14.138.109:81/PizzaWorld/registro">
            <!-- <a class="link_registro" href="http://localhost:8000/PizzaWorld/registro"> -->
                ¿No Tienes Cuenta?
            </a>
        </div>
        

    </center>

   
    @endsection