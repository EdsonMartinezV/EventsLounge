<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Editar evento</title>
</head>
<body>
@include('managerDashboard')
<body background="/images/eventos.jpeg">
</br>
    <div class="wrapper wrapper--w960">
        <div class="card card-2">
            <div class="card-body">
                <center><h1>Imagenes del Evento</h1></center>
                    @foreach ($images as $image)
                    @endforeach
                    @if (!empty($image))
                        <div class="input-group">
                            <center><h2>Evento: {{ $image->event_id}}</h2></center>
                        </div>
                        @php
                        $count=0;
                        @endphp
                        @foreach ($images as $image)                                         
                            <a href={{$image->url}}> Ver imagen {{$count+=1}}</a><br>
                            
                            <form action="/manager/images/change/{{$image->id}}" class="form-horizontal" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Agregue su nueva imagen</label>
                                            <input type="file" class="form-control-file" id="imagen" name="imagen"
                                            accept="image/*" required>
                                        </div>
                                    </div>
                                    <input id="nombre" name="event" type="text" value="{{$image->event_id}}" class="form-control" hidden> 
                                    <button type="submit" class="btn btn-primary">Cambiar imagen</button>
                            </form>
                            <form action="/manager/images/delete/{{$image->id}}" class="form-horizontal" method="post">
                                @csrf
                                    <input id="nombre" name="event" type="text" value="{{$image->event_id}}" class="form-control" hidden>
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Borrar</button>
                            </form> 
                        @endforeach
                    @endif
                </br>         
            </div>
            <a href="/manager" class="btn btn-success">Regresar al principal</a>
        <div>
    </div>
</body>
</html>