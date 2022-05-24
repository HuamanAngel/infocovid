@extends('layouts.template2')

@section('contenidoCSS')
<link href="/leaflet/leaflet.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<link rel="stylesheet" href="{{ asset('css/EstilosTabla.css') }}"> 
      
@endsection

<!--<body>-->
@section('contenido')
<br>
<br>
<br>
<br>
<br>
<br>

    <h1>PRECIOS DE PRODUCTOS</h1>
    <h2>Compare los precios de cada farmacia</h2>

        <!-- inicio de mapa-->
        <div class="contenedorMapa">
        <div id="myMap" style="height: 290px;width: 180%; margin-left: 130px; margin-top:60px; align:left;"></div>
        <!--Fin de mapa-->
            <div class="buscarMapa">
            <p>Busque establecimiento</p>
             </div>
        </div>
    <div style="height: 63px;"></div>
    <div style="display: flex; flex-direction:row;">


    
    <div class="contenedorTabla" style="margin-right: 120px; margin-top: 0px; background-color:rgba(255,255,255,0.0s); width:55%;">
    <form action="{{route('preciosTabla')}}" method="GET">
            @csrf
            <label><input type="text" name="nameSearch" placeholder="Ingrese el producto"></label>
            <label><input type="text" name="nameSearch2" placeholder="Ingrese el precio"></label>
                        Filtro
                        <select name="filtro">
                            <option value="Todos" selected disabled>Todos</option>
                            <option value="Primera necesidad">Primera necesidad</option>
                            <option value="Covid">Covid</option>
                        </select>
            <label >     </label>
            <button class="btn btn-success my-2 my-sm-0" type="submit">

               <i class="fad fa-search"></i>             

                buscar
            </button>
        </form>

        <table class="table">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Farmacia</th>
                <th>Stock</th>
                <th>Detalles</th>
            </tr>
            </thead>

            <!--Iconos-->



            @foreach($precios as $precio)
                <tr>
                    <td>{{ $precio->name_medi}}</td>
                    <td>{{ $precio->precio_med}}</td>
                    <td><a href="{{route('home.pagUser',$precio->userSpace->name_space)}}">{{ $precio->userSpace->name_space}}</a></td>

                    <td>{{ $precio->cantidad}}</td>
                    @if ($precio->tipo_medicamento == 'Covid')
                    <td><i class="fab fa-battle-net icono"></i></td>
                    @else
                    <td><i class="fas fa-capsules icono"></i></td>
                    @endif
                </tr>
            @endforeach
            
            
        </table>
   
        {{$precios->render()}}
    <!--LogicaMapa-->
    <style>
        .nameHeadSpace{
            font-size:13px;
            color:rgba(35,43,48,0.8);
            font-weight:bold;
            text-align: center;
        }

        .requisitosColor{
            font-weight: bold;
            color:black;
            text-transform: uppercase;
        }
        .labelDatos{
            color:black;
            text-decoration: none;
        }
    </style>

    <script src="/leaflet/leaflet.js"></script>
    <script>
        function dibujarMapa(zoom,lat_user,long_user){
            let myMap = L.map('myMap').setView([lat_user,long_user], zoom)
            L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            maxZoom: 18,
            }).addTo(myMap);
            let iconMarker = L.icon({
                iconUrl: '{{asset('img/marker.png')}}',
                iconSize: [30, 30],
                iconAnchor: [15, 0]
            });//Aca definimos un marcador de prueba

            let iconMarkerFb = L.icon({
                  iconUrl: '{{asset('img/markerFb.png')}}',
                  iconSize: [30, 30],
                  iconAnchor: [15, 15]
              });
            myMap.doubleClickZoom.disable();//Disablea el doble click en el zoom
            @foreach ($establecimientos_ubi as $establecimiento)

                L.marker([{{$establecimiento->latitude_fb_es}},{{$establecimiento->longitude_fb_es}}],{icon: iconMarker}).addTo(myMap).bindPopup(
                                "<h4 class='nameHeadSpace' ><a href='{{route('home.pagUser',$establecimiento->userSpace->name_space)}}'>{{$establecimiento->userSpace->name_space}}<a/></h4><hr style='border: 0.8px solid rgb(50,68,228);'/>" +
                                "<label class='nameHeadSpace'>Descripcion : {{$establecimiento->userSpace->descripcion}}</label>"+
                                "<br><label class='nameHeadSpace'>Calificacion : {{$establecimiento->userSpace->userFb->cali_fb}}</label><br>"+
                                "<label class='nameHeadSpace'>Establecimiento verificado : </label><label class='requisitosColor'>{{$establecimiento->userSpace->userFb->requi_complete}}</label>");
        
    
            @endforeach
                //Fin-Genera-Marcadores//


        }
    </script>
    <!--FinLogicaMapa-->
    
    @if (Route::has('login'))
        @auth
        <script>dibujarMapa(15,{{\Auth::user()->latitude}},{{\Auth::user()->longitude}});
        </script>
        @else

        <script>dibujarMapa(12,-12.07155,-77.04232);
        </script>

        @endauth
    @endif

    <!--Cambia el color del nav selecionado-->
    <script>
        var colorClase= document.getElementById('nav-change-color');
        var cantOpcionMenu =colorClase.getElementsByTagName('li');
        for(var i=0;i<cantOpcionMenu.length;i++){
            cantOpcionMenu[i].classList.remove('active');
        }        
        cantOpcionMenu[1].classList.add('active');
    </script>
    <!--FINCambia el color del nav selecionado-->

</div>
</div>
    <!-- inicio de mapa-->

@endsection

<!--</body>-->
