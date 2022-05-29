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
                <center><h1>Crear Usuario</h1></center>
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Nombre" name="name">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Apellidos" name="surname">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Correo Electronico" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Contraseña" name="password">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2 js-datepicker" type="text" placeholder="Rol de usuario" name="role">
                                    <select class="form-control" name="role" id="exampleFormControlSelect1">
                                    <option value="supervisor">Cliente</option>
                                    <option value="manager">Empleado</option>
                                    <option value="client">Encargado</option>
                                  </select>
                                </div>
                            </div>
                        </div>
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit">Guardar usuario nuevo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>