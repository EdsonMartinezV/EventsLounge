<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Registrarse </title>
</head>
<body>
@include ('header')
<body background="/images/eventos.jpeg">
    <div class="login-box">
			<div class="box-header">
				<h2>Crea tu cuenta </h2>
			</div>
        <form id="registerForm">
                @csrf
                <label for="username">Nombre/s</label>
                <br/>
                <input type="username" name="usuario" id="username">
                <br/>
                <label for="lastname">Apellidos</label>
                <br/>
                <input type="lastname" name="last" id="lastname">
                <br/>
                <label for="email">Correo electronico</label>
                <br/>
                <input type="email" name="mail" id="email">
                <br/>
                <label for="password">Contraseña</label>
                <br/>
                <input type="password" name="contra" id="password">
                <br/>
                <button type="submit" id="submit">Crear cuenta</button>
                <br/>
                <span class="badge badge-pill badge-danger" id="resultado"></span>
                <br/>
                  <a href="/">¿Ya eres cliente? Inicia Sesión</a>
	</form>
    
    </div>
    
    </body>
</html>