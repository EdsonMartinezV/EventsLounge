<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet" media="all">
    <title>Document</title>
</head>
<body>
    @include ('header')
    <body background="/images/eventos.jpeg">
    </br>
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-body">
                <center><h1>Haz tu reserva</h1></center>
                    <form method="POST" action="/new-booking/{{ $packId }}">
                        @csrf
                                <div class="input-group">
                                    <input class="input--style-2 js-datepicker" type="date" placeholder="Fecha de reserva(YYY/MM/DD)" name="date">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                       
                        <div class="p-t-30">
                            <center><button class="btn btn--radius btn--green" type="submit">Reservar</button></center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</body>
</html>