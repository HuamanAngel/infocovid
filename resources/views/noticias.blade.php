@extends('layouts.template2')
<link rel="stylesheet" href="/css/bootstrap.min2.css">

@section('contenidoCSS')

@endsection

@section('contenido')

    <br>
    <br>
    <!-- Card Noticias Filtro -->
    <section class="container mt-5 pt-5">
        <br />
        <div class="card">
        
            <h5 class="card-header"><b>NOTICIAS</b></h5>
            <div class="card-body">
                <form method="GET" action="{{ route('noticias') }}">
                    @csrf
                    <br />
                    <div class="box ml-5">
                        Seleccione el tipo de noticia
                        <select name="tipo">
                            <option value="Farmacias y boticas" selected disabled>Todos</option>
                            <option value="Farmacias y boticas">Farmacias y boticas</option>
                            <option value="Del estado">Actualidad</option>
                        </select>
                    </div>
                    <input type="submit" value="Buscar noticia" class="btn btn-primary btn-sm ml-5">
            
                </form>
            </div>
        </div>
    </section>
    <!-- Card Noticias -->
    <section class="container mt-5 pt-5">

        <div class="card-deck">
            @foreach ($orden as $noticia)
                <div class="container " style="width: 325px; padding: 5px;"> 
                    <div class="card">
                        <img class="card-img-top img-fluid" src="{{ $noticia->imagen }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $noticia->fuente }}</h5>
                            <p class="card-text m-2">{{ $noticia->descripcion }}</p>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary btn-lg btn-block" href="{{ $noticia->url }}" role="button">CONOCER
                                MÁS</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
    <!-- JS -->
    <script type="text/javascript">
        function mostrarEstado() {
            alert('Se muestra estado');
        }

        function mostrarFarmacia() {
            alert('Se muestra farmacia');
        }

    </script>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
        integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous">
    </script>
    <script src="/js/bootstrap.min2.js"></script>

    <!--Cambia el color del nav selecionado-->
    <script>
        var colorClase = document.getElementById('nav-change-color');
        var cantOpcionMenu = colorClase.getElementsByTagName('li');
        for (var i = 0; i < cantOpcionMenu.length; i++) {
            cantOpcionMenu[i].classList.remove('active');
        }
        cantOpcionMenu[2].classList.add('active');

    </script>
    <!--FINCambia el color del nav selecionado-->
    <!--Arreglo de diferencia de bootstrap-->
    <script>
      var fixNav1 = document.getElementById('nav-change-color');
      fixNav1.classList.remove('navbar-nav');
      console.log("valor");
      function funcionArreglo(x) {
          if (fixMenor.matches) {
              fixNav1.classList.add('navbar-nav');
            } else {
            fixNav1.classList.remove('navbar-nav');
          }
      }
      var fixMenor = window.matchMedia("(max-width:570px)");
      funcionArreglo(fixMenor);
      fixMenor.addListener(funcionArreglo);

  </script>
  <!--FIN Arreglo de diferencia de bootstrap-->



@endsection
