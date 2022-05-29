<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Manager Dshboard</title>
	<link rel="stylesheet" href="css/dashboardStyles.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
@include ('header')
		<div class="container">
		    <div class="btn-menu">
			    <label for="btn-menu">☰</label>
		    </div>
			<div class="logo">
				<h1>Manager Dashboard</h1>
			</div>
		</div>
	<div class="capa"></div>
    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
	    <div class="cont-menu">
		    <nav>
		    	<a id="usersButton">Ver Usuarios</a>
		    	<a id="packsButton">Ver Paquetes</a>
		    	<a id="eventsButton">Ver Eventos</a>
		    	<a id="paidsButton">Ver abonos</a>
		    </nav>
		    <label for="btn-menu">✖️</label>
	    </div>
    </div>
    <main id="main">
        <table class="table table-bordered table-striped" id="bookings">
            <thead>
                <tr>
                    <th>id evento</th>
                    <th>Fecha evento</th>
                    <th>precio</th>
                    <th>Usuario</th>
                    <th>Confirmado</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
            
            </tbody>
        </table>
    </main>
    <script src="{{ asset('js/managerDashboard.js') }}"></script>
</body>
</html>