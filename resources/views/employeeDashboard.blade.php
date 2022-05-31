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
			<a id="eventsButton">Listar eventos confirmados</a>
			<a href="/events-realized">Agregar fotos realizados</a>
			<a id="eventsPaid">Añadir abonos</a>
			<a id="paids">Ver abonos</a>
			<a id="toPayButton" href="employee/showToPay">Añadir Abonos</a>
			<a id="toWatchButton" href="employee/showToPay">Ver Abonos</a>
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