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
@include ('header')
@include ('managerHeader')
<body background="/images/eventos.jpeg">
</br>
    <div class="wrapper wrapper--w960">
        <div class="card card-2">
            <div class="card-body">
                <center><h1>Editar Evento</h1></center>
                <form method="POST" action="/manager/events/reason/{{$eventId}}">
                    @method('PUT')
                    @csrf
                    <div class="input-group">
                        <p>Evento: {{ $eventId }}</p><br>
                        <p>Razon:</p>
                            <input class="input--style-2" type="text" name="reason" value="">
                    </div>
                    </br>
                    <center><button class="btn btn--radius btn--green" type="submit">Guardar cambios</button><center>
                </form>
            </div>
        <div>
    </div>
</body>
</html>