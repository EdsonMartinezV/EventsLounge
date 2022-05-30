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
                    <form method="POST">
                        <div class="input-group">
                            <p>Fecha de evento:</p>
                              <input class="input--style-2" type="text" name="name">
                        </div>
                        <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                    <p>Precio de evento:</p>
                                        <input class="input--style-2" type="text" name="surname">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                    <p>Id de usuario:</p>
                                        <input class="input--style-2" type="text" name="email">
                                    </div>
                                </div>
                                <div class="col-2">
                                  <div>
                                      <p>Estado:</p>
                                            <select class="form-control" name="role" id="exampleFormControlSelect1">
                                            <option value="supervisor">Inactivo</option>
                                            <option value="manager">Activo</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="col-2">
                                  <div>
                                    <p>Realizado:</p>
                                          <select class="form-control" name="role" id="exampleFormControlSelect1">
                                          <option value="supervisor">No</option>
                                          <option value="manager">Si</option>
                                        </select>
                                      </div>
                                </div>
                        </div>
                        </br>
                            <center><button class="btn btn--radius btn--green" type="submit">Guardar cambios</button><center>
                </div>
          <div>
    </div>
</body>
</html>