@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2><a href='{{route('preciosTabla')}}'>Atras</a>  </h2>
                    <br/>
                    <br/>
                    <h2><label>{{$usuario->name_space}}</label></h2>
                    <h2><label>{{$usuario->descripcion}}</label></h2>
                    <h4><label>Ubicacion de establecimiento : {{$usuario->ubicacion_establecimiento}}</label></h4>
                    <h4><label>Tipo de establecimiento : {{$usuarioBotica->tipo}}</label></h4>
                    <h4><label>Fecha de creacion de cuenta : {{$usuarioBotica->created_at}}</label></h4>
                    <h4><label>Calificacion por usuarios : {{$usuario->userFb->cali_fb}}</label></h4>
                    <h4><label>Requisitos completos : {{$usuario->userFb->requi_complete}}</label></h4>
                    <h1 style="margin:auto;">Listado de producto</h1>

                    <div class="container">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
