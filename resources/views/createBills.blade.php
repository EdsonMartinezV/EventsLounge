<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet" media="all">
    <title>Gastos</title>
</head>
<body>
@include('managerDashboard')
<body background="/images/eventos.jpeg">
    </br>
    <div class="wrapper wrapper--w960">
        <div class="card card-2">
            <div class="card-body">
                <center><h1>Registrar gasto</h1></center>
                <form method="POST" action="{{ route('manager.bills.store', $eventId) }}">
                    @csrf
                    <p>ID</p>
                    <div class="input-group">
                        <p>Concepto</p>
                        <input class="input--style-2" type="text" placeholder="Concepto" name="concept">
                    </div>
                    <div class="input-group">
                        <p>Monto</p>
                        <input class="input--style-2" type="text" placeholder="Monto" name="amount">
                    </div>
                    <div class="input-group">
                        <p>Fecha</p>
                        <input class="input--style-2" type="date" placeholder="Fecha" name="date">
                    </br>
                    <center><button class="btn btn--radius btn--green" type="submit">Guardar gasto</button></center>
                </form>
            </div>
        </div>
    </div>
</body>
</html>