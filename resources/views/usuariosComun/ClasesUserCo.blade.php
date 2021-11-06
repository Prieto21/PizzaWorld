@extends('layout.layoutUserComun')
@section('contenido')
<br><br>
<h1 class="textPrincipal">Clases En Línea</h1>

<div class="contenidoClases">
   
    <div class="subContenidoClases">

        <hr>
        <div class="videoClass">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/mxqEM_1WiG8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="overflow-auto listaClass">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/vqeglXJlgJE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <br>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/nYSg4nUDYl0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/NdcImZPGVHE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/siGPPQzMy-8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/-pDCBfvkTUY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/DOJaGdGoTVo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Us6gzsVv_MA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/h_F1rWLTJmE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/2St_mwa2p0A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Kg-DmYe4r2s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <br>
        
        <div class="d-grid gap-2">
        <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#MensajePremium">Ver Más</button>
        </div>
            <!-- Modal -->
            <div class="modal fade" id="MensajePremium"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                   
                    <div class="modal-body contentModal">
                        <center><h1>¡Vuélvete Miembro De Pizza Of World!</h1></center>
                        
                        <hr>
                        <h4>Tendras cientos de beneficios tales como: <br></h4>
                        <br>
                        
                        <p class="pText">
                        - Todos los videos de las clases online. <br> <br>
                        - Ver todas las recetas completas. <br> <br>
                        - Agregar las recetas que más te gusten a tus favoritos.    <br> <br>
                        - Control total sobre tu perfil. <br>
                        </p>
                        <br><hr>
                        <center>
                            <a href="{{url('/PizzaWorld/registro')}}">
                            <button type="button" class="btne btn1">
                                    <h1>
                                        REGISTRARME 
                                    </h1>
                                </button>
                            </a>
                        </center>
        
                    </div>
                   
                </div>
            </div>
        </div>
        
            </div>
    </div>
</div>
<br>

@endsection