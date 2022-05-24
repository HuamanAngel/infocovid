<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
        .container-general{
            display:flex;
            flex-direction: column;
            flex-wrap: wrap;
            align-content: center;
            justify-content: center;
            background-color:rgba(250, 250, 250, 0.9);
        
        }
        .imagenLogo{
            border: 4px inset rgba(145, 152, 204, 0.5);
            border-radius: 10px;
            padding: 10px;
        }
        .container-general2{
            width: 90%;
            margin: auto;
            border: 1px solid rgba(145, 152, 204, 0.5);
            border-radius: 10px;
            padding: 10px;
        }
    </style>
    <div class="container-general">
        <div style="color:white;margin:auto;">
            
            <img class="imagenLogo" src="{{asset('/img/logoy.png')}}" alt="">
        </div>
    </div >
    <div class="container-general2">
        <h2 style="text-align: center">Felicitaciones {{$usuarioLogeado->usuario}}</h2>
        <label style="text-align:center;">Tu cuenta a sido habilitada, puedes empezar a publicar tus establecimientos
        y tus medicinas</label>
        <div class="conainer-datos">
            <label for=""></label>
        </div>
    </div>
</body>
</html>
