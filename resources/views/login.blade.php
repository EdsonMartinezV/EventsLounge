<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/prueba.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Datos</title>
</head>
<body>
	<form  id="loginForm">
		@csrf
		correo
		<input type="email" name="mail" id="email">
		contraseña:
		<input type="password" name="pass" id="password">
        <span class="badge badge-pill badge-danger" id="error"></span>
		<button type="submit">Ingresar</button>
        
	</form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.slim.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script>

        $('#loginForm').on('submit',function(e){
            e.preventDefault();
    
            var email = $('#email').val();
            var password = $('#password').val();
            var token = $('input[name="_token"]').val();
            console.log(token)
    
                $.ajax({
                url: "{{route('user.validate')}}",
                method: 'POST',
                data:{
                    _token: token,
                    correo: $("#email").val(),
                    contraseña: $("#password").val()
                }
    
            }).done(function(res){
                if(res.error){
                    $('#error').text(res.error)
                }
                if(res.success){
                    
                     window.location.href = '/dashboard';
                }
                
            })
    
        });
        </script>

</body>
</html>
