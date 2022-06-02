<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="{{ asset('css/dashboardStyles.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet" media="all">
    <title>Document</title>
</head>
<body>
@include('managerDashboard')
<body background="/images/eventos.jpeg">
    </br>
    <div class="wrapper wrapper--w960">
        <div class="card card-2">
            <div class="card-body">
                <center><h1>Crear paquete</h1></center>
                <form method="POST" action="{{ route('manager.packs.store') }}">
                    @csrf
                    <div class="input-group">
                        <input class="input--style-2" type="text" placeholder="Nombre" name="name">
                    </div>
                    <div class="input-group">
                        <input class="input--style-2" type="text" placeholder="Precio" name="price">
                    </div>
                    <div class="input-group">
                        <label class="input--style-2" for="estado"  name="is_active">Estado  </label>
                        <select class="form-control" name="is_active" id="estado">
                            <option value="0" selected>Inactivo</option>
                            <option value="1">Activo</option>
                        </select>
                    </div>
                    </br>
                    <center><button class="btn btn--radius btn--green" type="submit">Guardar nuevo paquete</button></center>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
