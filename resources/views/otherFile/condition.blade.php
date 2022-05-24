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


  <style>
    .container-general-1{
      display: flex;
      flex-direction: column;
      flex-
    }
    .container-child-1{

    }
  </style>
  <div class="container-general-1">
    <div class="container-child-1">

    </div>
    <div class="container-child-2">

    </div>
  </div>
    <!--Cambia el color del nav selecionado-->
    <script>
      var colorClase= document.getElementById('nav-change-color');
      var cantOpcionMenu =colorClase.getElementsByTagName('li');
      for(var i=0;i<cantOpcionMenu.length;i++){
          cantOpcionMenu[i].classList.remove('active');
      }        
      //cantOpcionMenu[1].classList.add('active');
  </script>
  <!--FINCambia el color del nav selecionado-->
  
@endsection