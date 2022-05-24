@extends('layouts.template2')
@section('contenidoCSS')
<link rel="stylesheet" href="css/bootstrap.min2.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/comentarios.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="public/css/comentarios.css">
@endsection

@section('contenido')
<br>
<br>
<br>
<br>
<br>

    <!--ACA METER TODO EL CONTENIDO-->
<div class="container">
<div class="row comentarios justify-content-center">
                    
 <div class="col-6">
                            <h1>Comentarios</h1>
                            @foreach($commentsGen as $com)
                            <div class="media">
                                @if($com->user_sex == 'masculino')
                                <img class="imagen" style="margin-left: 60px;" src="/img/testimonials/7.png">
                                @else
                                <img class="imagen" style="margin-left: 60px;" src="/img/testimonials/8.png">
                                @endif
                                <label class="mostrar-nombre" style="font-size:20px;">{{$com->user_com}}<span>{{$com->created_at}}</span></label>
                                <div class="media-body">
                                    <p class="comentario">
                                        {{$com->comentario}}
                                    </p>
                                    <div class="botones text-right">
                                        <a href="#">Responder</a>
                                        <a href="#">Editar</a>
                                        <a href="#">Borrar</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            @if (Route::has('login'))
                            @auth
                            <form action="/commentgen" method="post" class="form_comentarios d-flex justify-content.end flez-wrap">
                                {{ csrf_field() }}
                                <input type="hidden" name="user_com" value="{{ $user->usuario }}">
                                <input type="hidden" name="user_sex" value="{{ $user->sexo }}">
                                <textarea name="comentario" id="" placeholder="Escriba un comentario..."></textarea>
                                <button class="btn" name="submit" type="submit">Comentar</button>
                            </form>
                            @endauth
                            @endif
                            <br>
                            
    </div>
</div>
</div>
   
          
        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        
        <script>
            var colorClase = document.getElementById('nav-change-color');
            var cantOpcionMenu = colorClase.getElementsByTagName('li');
            for (var i = 0; i < cantOpcionMenu.length; i++) {
                cantOpcionMenu[i].classList.remove('active');
            }
            cantOpcionMenu[3].classList.add('active');
    
        </script>
            
    

    <!--Aca el JS-->
@endsection
