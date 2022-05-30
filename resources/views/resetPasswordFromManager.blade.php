@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/dashboardStyles.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <title>Reestablecer Contraseña</title>
</head>
<body>
    <d>Cambiar contraseña de usuario</d>
    <div class="row justify-content-center">
        <div class="card">
            <form action="/manager" method="POST">
                @csrf
                @method('PUT')  
                <div class="form-group">
                    <label for="exampleFormControlInput1"><f>Nueva Contraseña</f></label>
                    <input type="password" class="form-control" name="password_from_manager"
                    id="exampleFormControlInput1">
                </div>
                <input  class="crear" type="submit" value="Guardar Contraseña">
            </form>
        </div>
    </div>
</body>
</html>