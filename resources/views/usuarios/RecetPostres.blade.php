@extends('layout.layoutUser')
@section('contenido')
<br><br>

<div class="container-fluid ContNosotros">
    <h1 class="textPrincipal">Postres</h1>
    <div class="container-fluid ContRecet">
        <br>
        <hr>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($postres as $info )
            <div class="col">
                <div class="card h-100">
                    <br>
                    <center> <img src="/imagenes/{{$info->foto}}" class="card-img-top" style="max-width: 15rem;" alt="..."> <br><br>
                        <center>
                            <h5 class="card-title"><b>{{$info->receta}}</b></h5>
                        </center>
                        <hr>
                    </center>
                    <div class="card-body">



                        <center><button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#Recet{{$info->id}}" style="width: 8rem;">
                                Ver Receta <i class="far fa-eye"></i>
                            </button></center>

                    </div>
                </div>
                  <!-- Modal -->
            <center>
                <div class="modal fade"  id="Recet{{$info->id}}" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
                    <div class="modal-dialog" >
                        <div class="modal-content" >

                            <div class="modal-body contentModal" style="max-width:500px; transform: translateX(45%);">
                                <center> <img src="/imagenes/{{$info->foto}}" class="card-img-top" style="max-width: 15rem;" alt="..."> <br><br>
                                    <center>
                                        <h5 class="card-title"><b>{{$info->receta}}</b></h5>
                                    </center>
                                    <hr>
                                </center>


                                <b>Descripción</b>
                                <br>
                                <p class="pText">
                                {{$info->descripcion}}
                                </p>

                                <br>
                                <hr>
                                <center>
                                    <div class="buttonfavorite" style="display: flex; justify-content:space-around;">
                                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cerrar</button>
                                    <form action="Favorites" method="POST">
                                        @csrf
                                        <input type="text" name="id_receta" value="{{$info->id}}" hidden>
                                        <input type="text" name="id_usuario" value="5" hidden>
                                        <button type="submit" class="btn btn-outline-warning">Favoritos <i class="far fa-star"></i></button>
                                    </form>
                                    </div>
                                </center>

                            </div>

                        </div>
                    </div>
                </div>
            </center>
            </div>
          
            @endforeach

        </div>


        <br>
    </div>

    <br>
</div>




@endsection