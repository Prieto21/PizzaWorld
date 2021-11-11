@extends('layout.layoutPrincipal')
@section('contenido')

<body class="body">
    <br><br><br><br><br><br><br>
    <center>
       
        <div class="contenedorlogin">
            
            <form action="{{route('User.index')}}" method="POST">
            <!-- @csrf -->
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
                
                <a href="{{url('/PizzaWorld/User')}}">
                <button type="button" class="btn btn1 ">Entrar</button>
                </a>
                
            </form>
            
            <div class="contlogin">
            <a class="link_registro" href="{{url('/PizzaWorld/registro')}}">
                ¿No Tienes Cuenta?
            </a>
            <a class="link_registro" href="{{url('/PizzaWorld/UserCo')}}">
                Ingresar Sin Cuenta
            </a>
            </div>
        </div>
        

    </center>

   
    @endsection