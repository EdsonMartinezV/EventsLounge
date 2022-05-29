<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Employee Dshboard</title>
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
			<a href="/">2nd Employee Action</a>
			<a href="/">3rd Employee Action</a>
			<a href="/">4th Employee Action</a>
			<a href="/">5th Employee Action</a>
			<a href="/">6th Employee Action</a>
			<a id="eventsButton" href="employee/showEvents">1st Employee Action</a>
			<a id="toPayButton" href="employee/showToPay">2nd Employee Action</a>
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
	</table>
</main>
<script src="{{ asset('js/employeeDashboard.js') }}"></script>
</body>
</html>