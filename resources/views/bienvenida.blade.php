@extends('layout.layoutPrincipal')
@section('contenido')


<body class="body body1">

    <center>
        <h1 class="titulo">Bienvenidos a <br> “W<img src="{{ asset('imagenes/Icono_pagina.png') }}" class="IconoPag">P”</h1>
        
    </center>
    
    <br>
    <a href="{{url('/PizzaWorld/login')}}">
        <button class="btn btn1">
            Comenzar
        </button>
    </a>


    @endsection


