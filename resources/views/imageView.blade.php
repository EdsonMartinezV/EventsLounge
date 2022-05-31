<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet" media="all">
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
                    <div class="input-group">
                        <center><h2>Evento: {{ $image->event_id}}</h2></center>
                    </div>
                    @php
                    $count=0;
                    @endphp

                    @foreach ($images as $image)
                        <a href={{$image->url}}> Ver imagen {{$count+=1}}</a><br>
                    @endforeach
                    </br>
            </div>
        <div>
    </div>
</body>
</html>