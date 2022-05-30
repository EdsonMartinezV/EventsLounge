<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/estil.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dashboardStyles.css') }}">
    <title>Usuario</title>
</head>
<body>
    @include('header')
    <a class="testbutton" href="/booking">Crear Usuario</a>
    <main>
        <d>Lista de usuarios</d>
                <div class="horizontal-card">
                    <div class = "usersshow">
                        <a class= "categ"><b>Nombre</b></a>
                        <div>                
                            <a>Correo</a>
                        </div>
                    </div>
                   
                </div>
</br>
               
    </main>
</body>
</html>