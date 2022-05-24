@extends('layouts.template2')

@section('contenidoCSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Estilos.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

@endsection

@section('contenido')

    <!--Control de errores-->
    <!-- Fin de control de errores-->


    <form class="registro" method="POST" action="{{ route('home2') }}">
        @csrf

        <h1> CREACIÓN DE CUENTA</h1>
        <h2> Crea una cuenta para que puedas comentar y realizar denuncias publicas</h2>
        <!--Control de errores-->
        <style>
            .classError_form {     
                margin: auto;
                display: flex;
                flex-direction: row;
                justify-content: space-around;
                width: 80%;
                text-align: center;
                background-color: rgba(243, 112, 118, 0.5);
                border-radius: 10px;
                border: 1px solid rgba(39, 39, 39, 0.5);
            }

            .classError_form>label {
                margin: auto;
                font-size: 10px;
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                font-style: oblique;
                font-weight: bold;
                text-shadow: 1px 1px rgba(39, 39, 39, 0.5);

            }

            @media only screen and (max-width:800px) {
                .classError_form {
                    flex-direction: column;
                    justify-content: center;
                }
            }

        </style>
        <div class="classError_form">

            @if (session('mensaje'))
                <br />
                <label>* Error al repetir contraseña</label>

            @endif

            @if (session('mensaje1'))
                <br />
                <label>* Email ya usado</label>
            @endif
            @if (session('mensaje2'))
                <br />
                <label>* Distrito no selecionado</label>
            @endif
            @if (session('mensaje3'))
                <br />
                <label>* Sexo no seleccionado</label>
            @endif

            @error('usuario')
            <br />
            <label>* Error al entrar usuario</label>
            @enderror

            @error('contra')
            <br />
            <label>* Error al entrar contraseña</label>
            @enderror

            @error('contra_re')
            <br />
            <label>* Error al repetir contraseña</label>
            @enderror

            @error('correo')
            <br />
            <label>* Error al entrar correo</label>
            <br />
            <br />

            @enderror
            <!--Fin de Control de errores-->
        </div>



        <br>
        <div class="input-contenedor">
            <i class="fas fa-user-friends icono"></i>
            <input type="text" placeholder="Nombre de usuario" name="usuario">
        </div>
        <div class="input-contenedor">
            <i class="fas fa-key icono"></i>
            <input type="password" placeholder="Contraseña(Minimo 8 caracteres)" name="contra">
        </div>
        <div class="input-contenedor">
            <i class="fas fa-key icono"></i>
            <input type="password" placeholder="Confirma tu contraseña" name="contra_re">
        </div>
        <div class="input-contenedor">
            <i class="fas fa-envelope icono"></i>
            <input type="text" placeholder="Correo de recuperación de cuenta" name="correo">
        </div>

        <div class="input-contenedor">
            <div class="box">
                Sexo
                <select name="sexo">
                    <option value="femenino" selected disabled>Selecione genero</option>
                    <option value="femenino">Femenino</option>
                    <option value="masculino">Masculino</option>
                </select>
                Distrito
                <select id="selection-all-js" name="distrito">
                    <option selected disabled>Selecione distrito</option>
                    <script>
                        var idSelectDis = document.getElementById('selection-all-js');
                        var nombresDistritos = new Array('Ancon', 'Ate', 'Carabayllo', 'Comas', 'Independencia',
                            'Lince', 'Los Olivos', 'Miraflores',
                            'Pueblo Libre', 'Puente Piedra', 'Rimac',
                            'San Isidro',
                            'San Martin de porres', 'San Miguel', 'San Juan de Lurigancho'
                        );
                        for (i = 0; i < nombresDistritos.length; i++) {
                            var opcionesDistrito = document.createElement('option');
                            var opcionesTextoDis = document.createTextNode(nombresDistritos[i]);
                            opcionesDistrito.appendChild(opcionesTextoDis);
                            idSelectDis.appendChild(opcionesDistrito);
                        }

                    </script>
                </select>
            </div>
            <br>
        </div>

        <input type="submit" value="Registrese" class="button">
        <p>¿Tienes cuenta? <a class="Link" href="{{ route('login') }}">Iniciar sesión</a></p>

        </div>
    </form>
    <br>

    <!--Cambia el color del nav selecionado-->
    @guest
        <script>
            var colorClase = document.getElementById('nav-change-color');
            var cantOpcionMenu = colorClase.getElementsByTagName('li');
            for (var i = 0; i < cantOpcionMenu.length; i++) {
                cantOpcionMenu[i].classList.remove('active');
            }
            cantOpcionMenu[4].classList.add('active');
        </script>
    @endguest
    <!--FINCambia el color del nav selecionado-->

@endsection
