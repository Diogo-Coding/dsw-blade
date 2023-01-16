<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        h1 {
            color: red;
            background-color: whitesmoke;
            padding: 20px;
        }
        h1, h3, p {
            text-align: center;
        }
        .list {
            display: flex;
            justify-content:center; 
        }
    </style>
</head>
<body>
    <p><h1>{{$titulo}}</h1></p>
    <h3>Esta es la plantilla 1 de Blade</h3>
    <p>{{ time() }}</p>
    <p>{{$nombre}}</p>
    <p>{{$edad}} años</p>
    @if ($edad >=18)
        <p>Contenido para adultos</p>
    @else
        <p>Viva bob esponja!!!</p>
    @endif
    <div>
        <div class="list">
            <ul>
                @for ($i =  0; $i < $maximo; $i++)
                    <li>Elemento {{$i}}</li>
                @endfor
            </ul>
        </div>
        <div class="list">
            <ol>
                @forelse ($aficiones as $aficion)
                    <li>{{$aficion}}</li>
                    @empty
                        <li>No hay aficiones</li>
                        <li>Inserta aficiones</li>
                @endforelse
            </ol>
        </div>
    </div>
</body>
</html>
