<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/dashboardStyles.css') }}">
    <title>Usuario</title>
</head>
<body>
    @include('header')
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
                <a class="testbutton" href="/booking">Crear Usuario</a>
    </main>
</body>
</html>