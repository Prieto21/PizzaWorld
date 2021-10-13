@extends('layout.layoutUser')
@section('contenido')
<br><br>
<div class="container-fluid ContNosotros">
    <br>
<h1 class="textPrincipal">Nosotros</h1>

    <br>
    

    <div class="cardNosotros mb-3">
        <br>
        <div class="row g-0">

            <div class="col-md-8">
                <div class="card-body">
                    <h2 class="card-title">Quiénes Somos</h2><hr>
                    <p class="card-text">
                        Somos una empresa que tiene por valores:
                        La responsabilidad &nbsp- &nbsp
                        Calidad &nbsp-&nbsp
                        Honestidad &nbsp-&nbsp
                        Compromiso &nbsp-&nbsp
                        Confianza &nbsp-&nbsp
                        Trabajo en equipo &nbsp-&nbsp
                        Respeto &nbsp-&nbsp
                        Liderazgo &nbsp&nbsp
                        
                    </p>
                    
                    <h2 class="card-title">Misión</h2>
                    <hr>
                    <p class="card-text">
                    Somos una empresa dedicada a la elaboración de comida casera a domicilio, ofreciendo un menú variado y nutritivo, que con base en la calidad, servicio e higiene, contribuya a que nuestros clientes se alimenten de la mejor manera posible en la comodidad de su oficina u hogar brindando un servicio a domicilio de excelencia. Nuestro objetivo es complacer a nuestros clientes y que sientan los alimentos con el irremplazable sabor de hogar.
                    </p>
                    <h2 class="card-title">Visión</h2>
                    <hr>
                    <p class="card-text">
                    Buscamos convertirnos en el mayor proveedor de planes mensuales de comida casera a todas aquellas personas que no tiene el tiempo, las condiciones, las ganas o el conocimiento para cocinar diariamente, entregándoles una alimentación equilibrada y saludable.
                    </p>
                    
                </div>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('imagenes/7_Pizzas.jpg') }}" class="img-fluid rounded-start" alt="...">
                <hr>
                <center><h5>World Of Pizza</h5></center>
            </div>
        </div>
        <br>
    </div>
    <br><br>
</div>


@endsection