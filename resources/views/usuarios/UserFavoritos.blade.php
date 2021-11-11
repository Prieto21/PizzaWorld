@extends('layout.layoutUser')
@section('contenido')
<br><br>
<div class="container-fluid ContNosotros">
    <h1 class="textPrincipal">Mis Recetas Favoritas</h1>
    <div class="container-fluid ContRecet">
        <br>
        <hr>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($InfoFavoritos as $info )
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
                        <b>Descripción</b>
                        <p class="card-text">
                            {{$info->descripcion}}
                        </p>

                        <center><button type="button" class="btn btn-outline-danger" style="width: 5rem;" data-bs-toggle="modal" data-bs-target="#favoritos{{$info->id}}"><i class="fas fa-ban"></i>
                            </button>

                        </center>
                    </div>

                </div>
                <center>
                    <!-- Modal -->
                    <div class="modal fade" id="favoritos{{$info->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-body contentModal">
                                    <h1>Seguro Que Quieres Eliminar La Receta <br> <b>{{$info->receta}} </b> </h1>
                                    <br>
                                    <img src="/imagenes/{{$info->foto}}" style="max-width: 10rem;" >

                        
                                    <hr>
                                    <div class="buttonfavorite" style="display: flex; justify-content:space-around;">
                                        <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cancelar</button>
                                        <form action="{{route('User.destroy', $info->id_favorito)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            
                                            <button type="submit" class="btn btn-outline-danger" data-bs-dismiss="modal">Eliminar</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </center>
            </div>
            @endforeach

        </div>


    </div>
    <br>
</div>
<br>




@endsection