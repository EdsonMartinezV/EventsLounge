<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Employee Dshboard</title>
	<link rel="stylesheet" href="css/dashboardStyles.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/tables.css">
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
				<h1>Employee Dashboard</h1>
			</div>
		</div>
	<div class="capa"></div>

<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
			<a id="eventsButton"><img src="/images/listar.png" width="30px"> Listar eventos confirmados</a>
			<a href="/events-realized"><img src="/images/foto.png" width="30px"> Agregar fotos realizados</a>
			<a id="eventsPaid"><img src="/images/pago.png" width="30px">Añadir abonos</a>
			<a id="paids"><img src="/images/bills.png" width="30px">Ver abonos</a>
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>
<main id="main">
	<table class="table" id="mainTable">
		<thead>
			<tr id="mainTableHeadRow">

			</tr>
		</thead>
		<tbody id="mainTableBody">
		
		</tbody>
	</table>
</main>

<script src="{{ asset('js/employeeDashboard.js') }}"></script>
<script src="{{ asset('js/watchPaids.js') }}"></script>
</body>
</html>