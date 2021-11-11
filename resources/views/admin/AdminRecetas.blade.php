@extends('layout.layoutAdmin')
@section('contenido')
<br><br>
<div class="container">
    <div class="contorno-recetas">
        <h1 class="textPrincipal">Recetas </h1>
        <hr>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#Pizzas" type="button" role="tab" aria-controls="home" aria-selected="true" style="color: gray;">Pizzas</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link " id="profile-tab" data-bs-toggle="tab" data-bs-target="#Bebidas" type="button" role="tab" aria-controls="profile" aria-selected="false" style="color: gray;">Bebidas</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link " id="contact-tab" data-bs-toggle="tab" data-bs-target="#Postres" type="button" role="tab" aria-controls="contact" aria-selected="false" style="color: gray;">Postres</button>
            </li>
        </ul>
        <br>
        <div class="tab-content" id="myTabContent">
            <!-- PIZZAS -->
            <div class="tab-pane fade show active" id="Pizzas" role="tabpanel" aria-labelledby="home-tab">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach($pizzas as $info )
                    <div class="col">

                        <div class="card h-100 cardrecet-admin">
                            <img src="/imagenes/{{$info->foto}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <center>
                                    <h5 class="card-title"><b>{{$info->receta}}</b></h5>
                                </center>
                                <hr>
                                <p class="card-text">


                                    <b>Descripción</b> <br>
                                    {{$info->descripcion}}
                                </p>
                                <hr>
                                <center>
                                    <div class="buttonsRecetas">
                                        <button type="button" class="btn btn-outline-primary" style="width: 25%;" data-bs-toggle="modal" data-bs-target="#RecetModPizza{{$info->id}}"><i class="far fa-edit"></i></button>
                                        <!-- Modal -->
                                        <form action="DeleteRecet/{{$info->id}}" method="GET">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger" style="width: 25%;"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </div>
                                </center>

                            </div>

                        </div>
                        <center>
                            <div class="modal fade" id="RecetModPizza{{$info->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="{{route('Admin.update',$info->id)}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body contentModal" style="width: 30rem; transform: translateX(50%);">
                                                <br>
                                                <h4 style="color: white;">{{$info->receta}}</h4>
                                                <img src="/imagenes/{{$info->foto}}" style="max-width: 10rem;">
                                                <br> <br>
                                                <div style="display: flex; justify-content:center;">
                                                    <p style="color: white;">Cargar Nueva Foto: "</p> <input type="file" value="{{$info->foto}}" required name="foto" class="form-control" id="inputGroupFile01" style="max-width:6rem;max-height:2px; margin-top: 1.5%;">
                                                    <p>"</p>
                                                </div>
                                                <br>
                                                <p style="color: white;">Nombre:</p>
                                                <input type="text" class="form-control" name="receta" value="{{$info->receta}}" required>
                                                <input type="text" class="form-control" name="id_receta" value="{{$info->id_receta}}" hidden>
                                                <br>

                                                <p style="color: white;">Descripción:</p>
                                                <textarea name="descripcion" style="color: white;" cols="30" rows="5" required>
                                                {{$info->descripcion}}
                                                </textarea>

                                                <hr>
                                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                                                <button type="submit" class="btn btn-outline-info" data-bs-dismiss="modal">Modificar <i class="far fa-edit"></i></button>
                                            </div>
                                        </form>

                                    </div>
                                </div>

                            </div>

                        </center>
                    </div>


                    @endforeach
                </div>
            </div>
            <!-- BEBIDAS -->
            <div class="tab-pane fade" id="Bebidas" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach($bebidas as $info )
                    <div class="col">

                        <div class="card h-100 cardrecet-admin">
                            <img src="/imagenes/{{$info->foto}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <center>
                                    <h5 class="card-title"><b>{{$info->receta}}</b></h5>
                                </center>
                                <hr>
                                <p class="card-text">
                                    <b>Descripción</b> <br>
                                    {{$info->descripcion}}
                                </p>
                                <hr>
                                <center>
                                    <div class="buttonsRecetas">
                                        <button type="button" class="btn btn-outline-primary" style="width: 25%;" data-bs-toggle="modal" data-bs-target="#RecetModBebidas{{$info->id}}"><i class="far fa-edit"></i></button>
                                        <!-- Modal -->

                                        <form action="DeleteRecet/{{$info->id}}" method="GET">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger" style="width: 25%;"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </div>
                                </center>

                            </div>

                        </div>
                        <center>
                            <div class="modal fade" id="RecetModBebidas{{$info->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                        <form action="{{route('Admin.update',$info->id)}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body contentModal" style="width: 30rem; transform: translateX(50%);">
                                                <br>
                                                <h4 style="color: white;">{{$info->receta}}</h4>
                                                <img src="/imagenes/{{$info->foto}}" style="max-width: 10rem;">
                                                <br> <br>
                                                <div style="display: flex; justify-content:center;">
                                                    <p style="color: white;">Cargar Nueva Foto: "</p> <input type="file" value="{{$info->foto}}" required name="foto" class="form-control" id="inputGroupFile01" style="max-width:6rem;max-height:2px; margin-top: 1.5%;">
                                                    <p>"</p>
                                                </div>
                                                <br>
                                                <p style="color: white;">Nombre:</p>
                                                <input type="text" class="form-control" name="receta" value="{{$info->receta}}" required>
                                                <input type="text" class="form-control" name="id_receta" value="{{$info->id_receta}}" hidden>
                                                <br>

                                                <p style="color: white;">Descripción:</p>
                                                <textarea name="descripcion" style="color: white;" cols="30" rows="5" required>
                                                {{$info->descripcion}}
                                                </textarea>

                                                <hr>
                                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                                                <button type="submit" class="btn btn-outline-info" data-bs-dismiss="modal">Modificar <i class="far fa-edit"></i></button>
                                            </div>
                                        </form>

                                    </div>
                                </div>

                            </div>

                        </center>
                    </div>


                    @endforeach
                </div>
            </div>
            <!-- POSTRES -->
            <div class="tab-pane fade" id="Postres" role="tabpanel" aria-labelledby="contact-tab">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach($postres as $info )
                    <div class="col">

                        <div class="card h-100 cardrecet-admin">
                            <img src="/imagenes/{{$info->foto}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <center>
                                    <h5 class="card-title"><b>{{$info->receta}}</b></h5>
                                </center>
                                <hr>
                                <p class="card-text">
                                    <b>Descripción</b> <br>
                                    {{$info->descripcion}}
                                </p>
                                <hr>
                                <center>
                                    <div class="buttonsRecetas">
                                        <button type="button" class="btn btn-outline-primary" style="width: 25%; height:5%" data-bs-toggle="modal" data-bs-target="#RecetModPostres{{$info->id}}"><i class="far fa-edit"></i></button>
                                        <!-- Modal -->

                                        <form action="DeleteRecet/{{$info->id}}" method="GET">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger" style="width: 35%; height:5%"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </div>
                                </center>

                            </div>

                        </div>
                        <center>
                            <div class="modal fade" id="RecetModPostres{{$info->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                        <form action="{{route('Admin.update',$info->id)}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body contentModal" style="width: 30rem; transform: translateX(50%);">
                                                <br>
                                                <h4 style="color: white;">{{$info->receta}}</h4>
                                                <img src="/imagenes/{{$info->foto}}" style="max-width: 10rem;">
                                                <br> <br>
                                                <div style="display: flex; justify-content:center;">
                                                    <p style="color: white;">Cargar Nueva Foto: "</p> <input type="file" value="{{$info->foto}}" required name="foto" class="form-control" id="inputGroupFile01" style="max-width:6rem;max-height:2px; margin-top: 1.5%;">
                                                    <p>"</p>
                                                </div>
                                                <br>
                                                <p style="color: white;">Nombre:</p>
                                                <input type="text" class="form-control" name="receta" value="{{$info->receta}}" required>
                                                <input type="text" class="form-control" name="id_receta" value="{{$info->id_receta}}" hidden>
                                                <br>

                                                <p style="color: white;">Descripción:</p>
                                                <textarea name="descripcion" style="color: white;" cols="30" rows="5" required>
                                                {{$info->descripcion}}
                                                </textarea>

                                                <hr>
                                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                                                <button type="submit" class="btn btn-outline-info" data-bs-dismiss="modal">Modificar <i class="far fa-edit"></i></button>
                                            </div>
                                        </form>

                                    </div>
                                </div>

                            </div>

                        </center>
                    </div>


                    @endforeach
                </div>
            </div>
        </div>





    </div>
</div>
</div>
@endsection