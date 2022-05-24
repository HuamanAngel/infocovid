@extends('layouts.template2')


@section('contenidoCSS')
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
@endsection

@section('contenido')
<br>
<br>
<br>
<br>
<br>
<br>
    <div class="main">
        TODOS
        <p>CAMINANDO</p>

    </div>


    <!--Cambia el color del nav selecionado-->
    <script>
        var colorClase = document.getElementById('nav-change-color');
        var cantOpcionMenu = colorClase.getElementsByTagName('li');
        for (var i = 0; i < cantOpcionMenu.length; i++) {
            cantOpcionMenu[i].classList.remove('active');
        }
        //cantOpcionMenu[1].classList.add('active');

    </script>
    <!--FINCambia el color del nav selecionado-->


@endsection
