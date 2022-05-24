@extends('layouts.app')

@section('content')

<div class="container2">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            
                    <h2><label>{{$usuario->name_space}}</label></h2>
                    <h2><label>{{$usuario->descripcion}}</label></h2>
                 
                    <h4><label>Ubicacion de establecimiento : {{$usuario->ubicacion_establecimiento}}</label></h4>
                    <h4><label>Tipo de establecimiento : {{$usuarioBotica->tipo}}</label></h4>
                    <h4><label>Fecha de creacion de cuenta : {{$usuarioBotica->created_at}}</label></h4>
                    @php
                        $elemento2=0;
                    @endphp
                    @foreach($comentarioUser as $coment)
                        @php
                            $elem=0;
                            $usuario->userFb->cali_fb=$usuario->userFb->cali_fb + $coment->calif;
                            $elem=$loop->count;
                            $elemento2=$loop->count;
                        @endphp
                    @endforeach
                        @php
                            
                            if($elemento2<=0){
                                $elemento2=1;    
                            }
                            $usuario->userFb->cali_fb=$usuario->userFb->cali_fb/$elemento2;
                        @endphp
                    <h4><label>Requisitos completos : {{$usuario->userFb->requi_complete}}</label></h4>
                    <h1>Calificación por usuarios 
                            <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-star {{$usuario->userFb->cali_fb >= 1 ? ' yellow': ''}}"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star {{$usuario->userFb->cali_fb >= 2 ? ' yellow': ''}}"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star {{$usuario->userFb->cali_fb >= 3 ? ' yellow': ''}}"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star {{$usuario->userFb->cali_fb >= 4 ? ' yellow': ''}}"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star {{$usuario->userFb->cali_fb >= 5 ? ' yellow': ''}}"></i></li>
                            </ul>
                    </h1>
                    <br />
                    <br />
                    <h1 style="margin:auto;">LISTADO DE PRODUCTOS</h1>
                    <br />
                    <div class="container2">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Decripcion</th>
                                <th>Precio</th>
                                <th>Stock</th>
                            </tr>
                            </thead>
                
                
                        @foreach($productoUser as $producto)
                
                            <tr>
                                <td>{{$producto->name_medi}}</td>
                                <td>{{ $producto->descripcion_medi}}</td>
                                <td>{{ $producto->precio_med}}</td>
                                <td>{{ $producto->cantidad}}</td>
                            </tr>
                        @endforeach
                        </table>
                        {{$productoUser->links()}}
                      
                        <h6 style="margin:auto;"><b>COMENTARIOS</b></h6>
                        <br>
                        <!--Calificar la farmacia-->
                
                        <!--Comentario nuevo-->

                        @if (Route::has('login'))
                        @auth
                        <form action="/comment" method="post" class="form-horizontal">
                        <div class="input-comentario" id="ventana">
                            @if($user->sexo == 'masculino')
                            <img src="/img/testimonials/7.png">
                            @else
                            <img src="/img/testimonials/8.png">
                            @endif
                            <label class="mostrar-nombre" style="font-size:15px;">{{ $user->usuario }}</label>
                            <br> <br>
                                {{ csrf_field() }}
                                <input type="hidden" name="user_id" value="{{ $usuarioBotica->id }}">
                                <input type="hidden" name="us_com" value="{{ $user->usuario }}">
                                <input type="hidden" name="us_sex" value="{{ $user->sexo }}">      
                                <input type="text" placeholder="Ingrese un comentario" name="comentario">
                                <button name="submit" type="submit" class="button">Comentar</button>
                        </div>
                            <div>
                                <label class="mostrar-comen" style="font-size:15px; margin-left: 78%;">Califica la farmacia</label>
                                <p class="clasificacion" style="margin-right:15px;">
                                    <input id="radio1" type="radio" name="calif" value="5">
                                    <label for="radio1">★</label>
                                    <input id="radio2" type="radio" name="calif" value="4">
                                    <label for="radio2">★</label>
                                    <input id="radio3" type="radio" name="calif" value="3">
                                    <label for="radio3">★</label>
                                    <input id="radio4" type="radio" name="calif" value="2">
                                    <label for="radio4">★</label>
                                    <input id="radio5" type="radio" name="calif" value="1">
                                    <label for="radio5">★</label>
                                </p>
                            </div>
                        </form>  
                        @endauth
                    @endif    
                        <!--Coemntarios anteriores-->
                        <label style="margin-left: 8%; font-size: 13px;">2 comentarios anteriores</label>
                        @foreach($comentarioUser as $coment)
                        <div class="output-contenedor">
                            @if($coment->us_sex == 'masculino')
                            <img class="imagen" style="margin-left: 60px;" src="/img/testimonials/7.png">
                            @else
                            <img class="imagen" style="margin-left: 60px;" src="/img/testimonials/8.png">
                            @endif
                            <label class="mostrar-nombre" style="font-size:16px;">{{$coment->us_com}}</label>
                            @if($coment->calif > 4 && $coment->calif <= 5)
                            <span class="label label-success">Buena</span>
                            @endif
                            @if($coment->calif >= 2 && $coment->calif <= 4)
                            <span class="label label-warning">Regular</span>
                            @endif
                            @if($coment->calif >= 0 && $coment->calif < 2)
                            <span class="label label-danger">Mala</span>
                            @endif
                            <br>  
                            <label class="mostrar-comen" style="font-size:14px; margin-left: 18%; ">{{$coment->comentario}}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>



@endsection
