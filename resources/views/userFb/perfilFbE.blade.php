
<html>
<head>

  <link href= "{{asset('/leaflet/leaflet.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/usuarioFB.css')}}">
  <link rel="stylesheet" href="{{asset('css/modal.css')}}">
  <link rel="stylesheet" href="{{asset('css/animate.css')}}">
  <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="top-area">
        <div class="container">
          <div class="row">
            <div class="col A">
              <p class="bold text-left">Contactenos: 987654321 </p>
            </div>
            <div class="col A">
              <p class="bold text-center">Nosotros | Informate</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container navigation">

      @if (Route::has('login'))
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    @auth
                        <a class="navbar-brand" href="{{ route('welcomeUserRegister') }}">
                            <img src="/img/logoy.png" class="img-responsive" alt="" width="200" height="75" />
                        </a>
                    @else
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="/img/logoy.png" class="img-responsive" alt="" width="200" height="75" />
                        </a>
                    @endauth
                </div>
            @endif

        
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">

          <li class="active"><a href="{{route('welcomeUserRegister')}}">Inicio</a></li>
            <li><a href="{{route('preciosTabla')}}">Buscar productos</a></li>
            <li><a href="{{route('noticias')}}">Noticias</a></li>
            <li>
              <a href="{{route('welcomeUserRegister')}}">
                <form method="POST" action="{{ route('logout') }}">{{ csrf_field() }}
                    <button class="btnA btn-danger btn-xs">Cerrar sesion</button>
                </form>
              </a>
            </li>

            <!--li class="dropdown">
>>>>>>> 8549cc9af70ee02637a4bbcbeac68186beb1a649
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registrarse <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="http://localhost/proyectos/laravel/asd/public/home/registro">Registro de Usuario</a></li>
                <li><a href="http://localhost/proyectos/laravel/asd/public/home/registro">Registro de Dueño</a></li>
              </ul>
            </li>-->
            <!--<li><a href="http://localhost/proyectos/laravel/asd/public/home/login">Login del dueño</a></li>-->
          </ul>
        </div>
        
      </div>
     
    </nav>

<body>

<div class="container">

	<div class="row">

		<div class="col-md-6">
      
      <div class="card">
		    <div class="card-body">
		      <div class="row">
		        <div class="col-md-12">
		          <h4>Datos personales</h4>
		          <hr>
		        </div>
		      </div>
		      <div class="row"> 
		        <div class="col-md-12">
		          <form action="{{route('update.userfb',\Auth::user())}}" method="post" enctype="multipart/form-data">
                @csrf
                @php
                $usuarioActual = \Auth::user(); 
                @endphp
                <!-- Datos de Usuario general-->
                <div class="form-group row">
                  <label for="username" class="col-4 col-form-label">Nombre de usuario</label> 
                  <div class="col-8">
                      <input id="username" name="usuario" value="{{$usuarioActual->usuario}}"  class="form-control here" type="text" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="name" class="col-4 col-form-label">Nueva Contraseña</label> 
                  <div class="col-8">
                    <input id="name" name="contra" placeholder="nueva contraseña" class="form-control here" type="text">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="lastname" class="col-4 col-form-label">Repetir contraseña</label> 
                  <div class="col-8">
                    <input id="lastname" name="contra_re" placeholder="repetir contraseña" class="form-control here" type="text">
                  </div>
                </div>            
                <div class="form-group row">
                  <label for="distrito" class="col-4 col-form-label">Distrito</label> 
                  <div class="col-8">
                    <input id="distrito" name="distrito" class="form-control here" value="{{$usuarioActual->distrito}}" type="text" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="sexo" class="col-4 col-form-label">Sexo</label> 
                  <div class="col-8">
                    <input id="sexo" name="sexo" class="form-control here" value="{{$usuarioActual->sexo}}" disabled type="text">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="email" class="col-4 col-form-label">Correo electrónico</label> 
                  <div class="col-8">
                    <input id="email" name="correo" placeholder="Email" class="form-control here" value="{{$usuarioActual->correo_recu}}" type="text">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="offset-4 col-8">
                      @if ($is_fb)
                      @else
                        <button name="submit" type="button" class="btn btn-primary" onclick="showOpciones()">Volverme farmacia</button>
                      @endif
    
                      <button name="submit" type="submit" class="btn btn-primary">Guardar cambios</button>

                    </div>
                </div>

                <!-- FIN Datos de Usuario general-->




                <!--Evaluacion del usuario general-->

                @if ($is_fb)
                @else
                  <div class="form-group row escondido-div">
                    <label for="website" class="col-4 col-form-label" >Video de muestra</label> 
                    <div class="col-8">
                      <input id="website" name="videoMuestra" placeholder="URL" class="form-control here" type="text">
                    </div>
                  </div>             

                  <div class="form-group row escondido-div">
                    <label for="documentos" class="col-4 col-form-label" >Documentos</label> 
                    <div class="col-8">
                      <input id="documentos" name="documentos_upload" placeholder="URL" class="here" type="file">
                    </div>
                  </div>             



                  <div class="form-group row escondido-div">
                    <label for="select" class="col-4 col-form-label">Tipo establecimiento</label> 
                     <div class="col-8">
                        <select id="select" name="tipo" class="custom-select">
                          <option>Selecionar</option>
                          <option>farmacia</option>
                          <option>botica</option>
                        </select>
                      </div>
                  </div>
  
                  <div class="form-group row escondido-div">
                    <label for="telefono" class="col-4 col-form-label" >Telefono</label> 
                    <div class="col-8">
                      <input id="telefono" name="telefono" placeholder="telefono" class="form-control here" type="text">
                    </div>
                  </div>             

                  <div class="form-group row escondido-div">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Mandar solicitud</button>
                    </div>
                  </div>

                @endif
                <!--FIN Evaluacion del usuario general-->
              </form>
		        </div>
          </div>      
		    </div>
		  </div>
    </div>
  @if ($is_fb)

    <div class="col-md-6">
      <div class="card">
		    <div class="card-body">
		      <div class="row">
		        <div class="col-md-12">
		          <h4>Datos establecimiento</h4>
		          <hr>
		        </div>
		      </div>
		      <div class="row">
		        <div class="col-md-12">
		          <form action="{{route('update.userfb',\Auth::user())}}" method="post" enctype="multipart/form-data">
                @csrf

                <!-- Popup-->
                <div class="modal" id="ventanaModal" >
                  <div class="modal-dialog" role="document">
                    <div class="modal-content" id="algo">
                      <div class="modal-header">
                          <h1>Ubique su local</h1>
                      </div>
                      <div class="modal-body" id="show-input">
                        
                        <div id="myMap" style="height: 400px;"></div>


                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-warning" type="button" data-dismiss="modal" >Cerrar</button>
                      </div>
                  </div>
                  </div>
                </div>
                <!-- Fin Popup-->

                <div class="form-group row">
                  <label for="text" class="col-4 col-form-label">Nombre establecimiento</label> 
                    <div class="col-8">
                      <input id="tienda" class="form-control here"  type="text" name="nameSpace" value="{{$usuarioActual->userFb->userSpace->name_space}}">
                    </div>
                </div>

                <div class="form-group row">
                  <label for="text" class="col-4 col-form-label">Descripcion</label> 
                    <div class="col-8">
                      <input id="descripcion" class="form-control here"  type="text" name="descripcion" value="{{$usuarioActual->userFb->userSpace->descripcion}}">
                    </div>
                </div>

                <div class="form-group row">
                  <label for="text" class="col-4 col-form-label">Requisito completos</label> 
                    <div class="col-8">
                      <input id="descripcion" class="form-control here"  type="text" name="requiComplete" value="{{$usuarioActual->userFb->requi_complete}}" disabled>
                    </div>
                </div>

                                
                <div class="form-group row">
                  <label for="text" class="col-4 col-form-label">Tipo de establecimiento</label> 
                    <div class="col-8">
                      <input id="tienda" name="tienda" placeholder="Nombre establecimiento" class="form-control here" value="{{$usuarioActual->tipo}}" type="text" disabled>
                    </div>
                </div>

                <div class="form-group row">
                  <label for="text" class="col-4 col-form-label">Calificacion por usuarios</label> 
                    <div class="col-8">
                      <input id="descripcion" class="form-control here"  type="text" name="caliFb" value="{{$usuarioActual->userFb->cali_fb}}" disabled>
                    </div>
                </div>

                <div class="form-group row">
                  <label for="text" class="col-4 col-form-label">Telefono</label> 
                    <div class="col-8">
                      <input id="descripcion" class="form-control here"  type="text" name="telefono" value="{{$usuarioActual->telefono}}"  disabled>
                    </div>
                </div>

                <div class="form-group row">
                  <label for="text" class="col-4 col-form-label">Video de muestra subido</label> 
                    <div class="col-8">
                      <input id="descripcion" class="form-control here"  type="text" name="" value="{{$usuarioActual->video_muestra}}" disabled>
                    </div>
                </div>

                <div class="form-group row">
                  <label for="text" class="col-4 col-form-label">Documento subidos</label> 
                    <div class="col-8">
                      <input id="descripcion" class="form-control here"  type="text" name="" value="{{$usuarioActual->documentos}}" disabled>
                    </div>
                </div>


                <div class="form-group row">
                  <label for="text" class="col-4 col-form-label">Inserte la cantidad de establecimiento</label> 

                  <label for="text" class="col-4 col-form-label">
                    <select id="cantidad-far" name="cantidad-far"  class="form-control here">
                      <option value="1">1 establecimiento</option>
                      <option value="2">2 establecimiento</option>
                      <option value="3">3 establecimiento</option>
                      <option value="4">4 establecimiento</option>
                      <option value="5">5 establecimiento</option>

                    </select>
                    <label for="text" class="col-12 col-form-label alert-danger" style="text-align:center;font-size:11px;" id="cantidadSelect">No selecionado</label> 
                    <!--<input id="coord" name="coord" placeholder="Latitud, Longitud" class="form-control here" type="text">-->
                 </label>

                  <button name="submit" type="button" class="btn btn-primary" data-toggle="modal" data-target="#ventanaModal" style="height:100% !important; align-self:center;" onclick="dibujarMapa(15,{{\Auth::user()->latitude}},{{\Auth::user()->longitude}})">Localizar local</button>

                </div>  

                <div class="form-group row">
                  <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Guardar cambios</button>
                    <a href="{{route("preciosTabla")}}" class="btn btn-primary">Vista de usuario</a>

                  </div>
                </div>
              </form>
		        </div>
          </div>     
		    </div>
		  </div>
    </div>
  @endif


	</div>
</div>
<br>
<br>
<br>

@if ($is_fb)
@php
    $idMediNas=-1;
@endphp

                <!-- Popup update medi-->
              <form action="{{route('updateMediUserNow')}}" method="POST">
              @csrf
                <div class="modal" id="ventanaModalUpdateMedi1" style="width:100%;" >
                  <div class="modal-dialog"  role="document">
                    <div class="modal-content" style="border: 4px inset rgba(153,160,208,0.9);" id="algo">
                      <div class="row">
                        <div class="col-sm-2" style="background-color: rgba(153,160,208,0.9);">
                          <h2 class="cvaca">INFOCOVID</h4>
                        </div>
                        <div class="col-sm-10">
                          <div class="modal-header">
                              <h2 style="font-family: monospace;text-align:center;">Actualize sus datos</h1>
                          </div>
                          <div class="modal-body" id="show-input">
                            <div class="row">
                              <div class="col-sm-4">
                                <label class="labelInputPop">Nombre</label>
                              </div>
                              <div class="col-sm-6">
                                <input class="form-control input-1-js" type="text" name="nameUpdate" placeholder="Nombre de medicamento">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-sm-4">
                                <label class="labelInputPop">Descripcion</label>
                              </div>
                              <div class="col-sm-6">
                                <input class="form-control input-1-js" type="text" name="descriUpdate" placeholder="Inserte descripcion">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-4">
                                <label class="labelInputPop">Precio</label>
                              </div>
                              <div class="col-sm-6">
                                <input class="form-control input-1-js" type="number" name="precioUpdate" placeholder="¿Precio?">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-sm-4">
                                <label class="labelInputPop">Stock</label>
                              </div>
                              <div class="col-sm-6">
                                <input class="form-control input-1-js" type="number" name="stockUpdate" placeholder="¿Stock?">
                                <input class="input-1-js" style="display: none;" type="text" name="aslId">
                              </div>
                            </div>


                          </div>
                          <div class="modal-footer">
                            
                            <button class="btn btn-success" style="margin:auto;" type="submit">Actualizar</button>
                            <button class="btn btn-warning" type="button" data-dismiss="modal" >Cerrar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
                <!-- Fin Popup update medi-->




<div class="container">
  <div class="row">
    <div class="col-md-4">

      <!-- Agregar medicamento -->
      <div class="card card-body">
      <h4 align="center">Agregar medicamentos</h4>
      <br>

        <form action="{{route('update.medi',\Auth::user())}}" method="post" enctype="multipart/form-data" id="form-add-med">
          @csrf

          <div class="form-group">
            <input type="text" name="name_medi" class="form-control" placeholder="Nombre" autofocus>
          </div>
          <div class="form-group">
            <textarea name="descri_medi" rows="2" class="form-control" placeholder="Descripcion"></textarea>
          </div>
          <div class="form-group">
            <input type="number" name="price_medi" class="form-control" placeholder="Precio" autofocus>
          </div>
          <div class="form-group">
            <input type="number" name="stock_medi" class="form-control" placeholder="Stock" autofocus>
          </div>
          <input type="submit" name="save_task" class="btn btn-success btn-block botonAgregar" id="medicinaAsincronica" value="Agregar"> 


        </form>
      </div>
    </div>



    <div class="col-md-8 tablaEx">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($medicinasShow as $medicinaShow)
            <tr data-id="{{$medicinaShow->id}}">
              <td>{{$medicinaShow->name_medi}}</td>
              <td>{{$medicinaShow->descripcion_medi}}</td>
              <td>{{$medicinaShow->precio_med}}</td>
              <td>{{$medicinaShow->cantidad}}</td>
              <td>
                <a href="#" class="btn btn-secondary" onclick="datosMedicina('{{$medicinaShow->name_medi}}','{{$medicinaShow->descripcion_medi}}',{{$medicinaShow->precio_med}},{{$medicinaShow->cantidad}},{{$medicinaShow->id}})" data-toggle="modal" data-target="#ventanaModalUpdateMedi1">
                  <i class="fas fa-marker"></i>
                </a>
    
                  <a href="{{route('borrar.medi',$medicinaShow->id)}}" class="btn btn-danger">
                    <i class="far fa-trash-alt"></i>
                  </a>
              </td>
            </tr>
              
          @endforeach
    
        </tbody>
      </table>
      {{$medicinasShow->render()}}      <!--form para borrar ajax-->

      <!--fin form para borrar ajax-->

    </div>
    <form action="{{route('borrar.medi',':USER_ID')}}" method="get" id="form-delete-medi">
      @csrf
      
    </form>
</div>
</div>
@endif

<!--Estilos para usuario General -->
@if (!$is_fb)
<style>
    .container{
      width: 100% !important;
    }
    .row{
      width: 100% !important;

    }
    .col-md-6{
      width: 100% !important;
    }
    .card{
      width: 200%!important;
      border: 1px solid black !important;
    }
    .escondido-div{
      display: none;
    }
</style>

<script type="text/javascript">
  var indicador="no";
  function showOpciones(){
    var modificacion=document.getElementsByClassName('escondido-div');
    
    if(indicador=="si"){
      for(var i=0;i<modificacion.length;i++){
        modificacion[i].style.display="none";
      }
      indicador="no";
      
    }else if(indicador=="no"){
      for(var i=0;i<modificacion.length;i++){
        modificacion[i].style.display="flex";
      }
      indicador="si";
    }
    
  }

</script>
<!--FIN Estilos para usuario General-->

@else
<!--INICIO usuarios FB-->


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
        .labelInputPop{
          font-family: monospace;
          font-style: normal;
          text-shadow: 0.5px 0.5px black;
          color: black;
        }
        .cvaca{
          transform: rotate(90deg);  
          line-height: 70px;      
          color: white;
          letter-spacing: 19px;
        }
        
    </style>
    <script>
      var inputsDePopup =document.getElementsByClassName('input-1-js');
      function datosMedicina(nombre,descripcion,precio,cantidad,aslt){
        
        inputsDePopup[0].value=nombre;
        inputsDePopup[1].value=descripcion;
        inputsDePopup[2].value=precio;
        inputsDePopup[3].value=cantidad;
        inputsDePopup[4].value=aslt;
        $idMediNas=aslt;
      }

    </script>
    <script src="/leaflet/leaflet.js"></script>
     <script>   
        let myMap;
        let iconMarker;
        let iconMarkerFb;
        let latLng;
        var creado=false;
        let arrayPos=[1,2,3,4,5];
        var mensajeCantidad = document.getElementById('cantidadSelect');
        var cantidadClick=0;
        var listaSelect;
        var indiceSelect;
        var valorSelect=-1; 
        var popupSet;
        var nodosValores=[document.createTextNode("Local 1 : "),document.createTextNode("Local 2 : "),
        document.createTextNode("Local 3 : "),document.createTextNode("Local 4 : "),document.createTextNode("Local 5 : ")];
        var inputsValoresLat=[document.createElement('input'),document.createElement('input'),document.createElement('input')
      ,document.createElement('input'),document.createElement('input')];

      var inputsValoresLon=[document.createElement('input'),document.createElement('input'),document.createElement('input')
      ,document.createElement('input'),document.createElement('input')];

            /*Local 1<input id="coord" name="coord" placeholder="Latitud, Longitud" class="form-control here" type="text">
            Local 2<input id="coord" name="coord" placeholder="Latitud, Longitud" class="form-control here" type="text">
            Local 3<input id="coord" name="coord" placeholder="Latitud, Longitud" class="form-control here" type="text">
            */

        function dibujarMapa(zoom,lat_user,long_user){
          cantidadClick=0;
          if(valorSelect==-1){
            mensajeCantidad.classList.remove('alert-danger');
            mensajeCantidad.classList.add('alert-info');
          }else{
            valueOld=valorSelect;
            for(var valor=0;valor<valorSelect;valor++){
              popupSet.removeChild(nodosValores[valor]);
              popupSet.removeChild(inputsValoresLat[valor]);
              popupSet.removeChild(inputsValoresLon[valor]);
            }
          }
  
          listaSelect=document.getElementById('cantidad-far');
          indiceSelect=listaSelect.selectedIndex;
          valorSelect =listaSelect[indiceSelect].value; 
          popupSet=document.getElementById('show-input');
          for(var valor=0;valor<valorSelect;valor++){
            popupSet.appendChild(nodosValores[valor]);
            //Creando los inputs
            inputsValoresLat[valor].classList.add("form-control");
            inputsValoresLat[valor].classList.add("here");
            inputsValoresLat[valor].placeholder="Latitud";
            inputsValoresLat[valor].type="text";
            inputsValoresLat[valor].name="latitudLocal"+valor;
            inputsValoresLat[valor].value="";

            inputsValoresLon[valor].classList.add("form-control");
            inputsValoresLon[valor].classList.add("here");
            inputsValoresLon[valor].placeholder="Longitud";
            inputsValoresLon[valor].type="text";
            inputsValoresLon[valor].name="longitudLocal"+valor;
            inputsValoresLon[valor].value="";

            popupSet.appendChild(inputsValoresLat[valor]);
            popupSet.appendChild(inputsValoresLon[valor]);
          }
          mensajeCantidad.innerHTML=valorSelect + " seleccionados";

            if(creado==false){
              myMap = L.map('myMap').setView([lat_user,long_user], zoom)
              L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
              maxZoom: 18,
              }).addTo(myMap);
              iconMarker = L.icon({
                  iconUrl: '{{asset('img/marker.png')}}',
                  iconSize: [30, 30],
                  iconAnchor: [15, 15]
              });

              iconMarkerFb = L.icon({
                  iconUrl: '{{asset('img/markerFb.png')}}',
                  iconSize: [30, 30],
                  iconAnchor: [15, 15]
              });
              myMap.doubleClickZoom.disable();//Disablea el doble click en el zoom
              

              @foreach ($establecimientos_ubi as $establecimiento)
              if ({{$establecimiento->user_space_id}}!={{$usuarioActual->userFb->userSpace->id}}) {

                L.marker([{{$establecimiento->latitude_fb_es}},{{$establecimiento->longitude_fb_es}}],{icon: iconMarker}).addTo(myMap).bindPopup(
                    "<h4 class='nameHeadSpace' ><a href='{{route('home.pagUser',$establecimiento->userSpace->name_space)}}'>{{$establecimiento->userSpace->name_space}}<a/></h4><hr style='border: 0.8px solid rgb(50,68,228);'/>" +
                     "<label class='nameHeadSpace'>Descripcion : {{$establecimiento->userSpace->descripcion}}</label>"+
                    "<br><label class='nameHeadSpace'>Calificacion : {{$establecimiento->userSpace->userFb->cali_fb}}</label><br>"+
                    "<label class='nameHeadSpace'>Establecimiento verificado : </label><label class='requisitosColor'>{{$establecimiento->userSpace->userFb->requi_complete}}</label>");
                
              }else{
                L.marker([{{$establecimiento->latitude_fb_es}},{{$establecimiento->longitude_fb_es}}],{icon: iconMarkerFb}).addTo(myMap).bindPopup(
                    "<h4 class='nameHeadSpace' ><a href='{{route('home.pagUser',$establecimiento->userSpace->name_space)}}'>{{$establecimiento->userSpace->name_space}}<a/></h4><hr style='border: 0.8px solid rgb(50,68,228);'/>" +
                     "<label class='nameHeadSpace'>Descripcion : {{$establecimiento->userSpace->descripcion}}</label>"+
                    "<br><label class='nameHeadSpace'>Calificacion : {{$establecimiento->userSpace->userFb->cali_fb}}</label><br>"+
                    "<label class='nameHeadSpace'>Establecimiento verificado : </label><label class='requisitosColor'>{{$establecimiento->userSpace->userFb->requi_complete}}</label>");

              } 
            @endforeach
              
              creado=true;


              myMap.on('dblclick',e=>{              
              latLng = myMap.mouseEventToLatLng(e.originalEvent)
              cantidadClick++;
                
              if(cantidadClick==1 && cantidadClick<=valorSelect){
                inputsValoresLat[0].value=latLng.lat;
                inputsValoresLon[0].value=latLng.lng;
                arrayPos[cantidadClick-1]=L.marker([latLng.lat,latLng.lng],{icon: iconMarkerFb}).addTo(myMap);
              }

              if(cantidadClick==2 && cantidadClick<=valorSelect){
                inputsValoresLat[1].value=latLng.lat;
                inputsValoresLon[1].value=latLng.lng;
                arrayPos[cantidadClick-1]=L.marker([latLng.lat,latLng.lng],{icon: iconMarkerFb}).addTo(myMap);
              }
              if(cantidadClick==3 && cantidadClick<=valorSelect){
                inputsValoresLat[2].value=latLng.lat;
                inputsValoresLon[2].value=latLng.lng;
                arrayPos[cantidadClick-1]=L.marker([latLng.lat,latLng.lng],{icon: iconMarkerFb}).addTo(myMap);
              }
              if(cantidadClick==4 && cantidadClick<=valorSelect){
                inputsValoresLat[3].value=latLng.lat;
                inputsValoresLon[3].value=latLng.lng;
                arrayPos[cantidadClick-1]=L.marker([latLng.lat,latLng.lng],{icon: iconMarkerFb}).addTo(myMap);
              }
              if(cantidadClick==5 && cantidadClick<=valorSelect){
                inputsValoresLat[4].value=latLng.lat;
                inputsValoresLon[4].value=latLng.lng;
                arrayPos[cantidadClick-1]=L.marker([latLng.lat,latLng.lng],{icon: iconMarkerFb}).addTo(myMap);
              }
              if(cantidadClick>valorSelect){
                for(var valor=0;valor<valorSelect;valor++){
                  myMap.removeLayer(arrayPos[valor]);
                  inputsValoresLat[valor].value="";
                  inputsValoresLon[valor].value="";
                }

                alert("Maximo numero de locales. Se empezarana reemplazar");
                cantidadClick=0;  
              }
            })
          }

            //Capta el doble click

        }

    </script>


            @if (Route::has('login'))
            @auth
            

            @endauth
          @endif



    <!--FinLogicaMapa-->

@endif
<!--FIN usuarios FB-->

<br>
<footer>
<div class="container">
            <div class="rowA">

                <div class="colB">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                            <img src="/img/logoy.png" class="img-responsive center" alt="" width="200" height="75" />
                        </div>
                    </div>
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                        </div>
                    </div>
                </div>


                <div class="colB">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                            <h5>CONTENIDO</h5>
                            <ul>
                                <li><a href="#" data-toggle="modal" data-target="#ventanaModalQuienes">¿Quiénes somos?</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#ventanaModalPolitica">Política y privacidad</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#ventanaModalAtencion">Atención al cliente</a></li>


                            </ul>
                        </div>
                    </div>
                </div>
                <div class="colB">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                            <h5>CONTACTENOS</h5>
                            <ul>
                                <li>
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                                    </span> 987654321
                                </li>
                                <li>
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
                                    </span> infocovid@gmail.com
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="sub-footer">
          <div class="container" >
            <div class="row">
              <div class="colC">
                <div class="wow fadeInLeft" data-wow-delay="0.1s">
                  <div class="text-center">
                    <p>&copy;Copyright - Grupo7CalidadDeSoftware. All rights reserved.</p>
                    <p id="prueba-borrar" style="display: none;">GATOSSSSSSSSSSSSSSSSSSSSS CON BOTAS</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<!--
<script type = "text/javascript">
  $(document).ready(function(){
    alert('{{ url('home')}}');
    $('.borrarMediNow').click(function(e){
      e.preventDefault(e);//Evita que el navegador envia la accion del enlace, osea evitar que recarge
      //abort(500);//Se coloca para deterner la accion
      var fila=$(this).parents('tr');
      var id=fila.data('id');
      var form = $('#form-delete-medi');
      var url=form.attr('action').replace(':USER_ID',id);
      var data = form.serialize();

      fila.fadeOut();//Borra la fila en el servidor
      $.get(url,data,function(result){
      }).fail(function(){
        alert("La medicina no pudo ser eliminado");
        fila.show();//Vuelve a mostra cuando no fue eliminado
      });
    });
    $('#medicinaAsincronica').click(function(e){
      e.preventDefault(e);
      var form = $('#form-add-med');
      var url = form.attr('action');
      var data=form.serialize();
      var valorMostrar = $('#prueba-borrar');
      var valorTabla = $('.tablaEx');
      //valorTabla.addClass('loading');
      $.post(url,data,function(result){
        valorMostrar.fadeIn(2000);
        valorTabla.fadeOut();
        /*
        valorTabla.load(url,function(){
          valorTabla.fadeIn();
        });*/
      }).fail(function(){
        alert("No se pudo agregar la medicina");
      });
    });
  });

</script>
-->
</footer>
</body>
</html>