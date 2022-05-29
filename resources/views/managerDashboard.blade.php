<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Manager Dshboard</title>
	<link rel="stylesheet" href="css/dashboardStyles.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/tables.css">
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
		    	<a id="usersButton" href="manager/showUser">Ver Usuarios</a>
		    	<a id="packsButton" href="manager/showPackages">Ver Paquetes</a>
		    	<a id="eventsButton" href="manager/showEvents">Ver Eventos</a>
		    	<a id="paidsButton" href="manager/showToPay">Ver abonos</a>
		    </nav>
		    <label for="btn-menu">✖️</label>
	    </div>
    </div>
    <main id="main">
        <table class="table" id="mainTable">
            <thead>
                <tr id="mainTableHeadRow">
					<th>#</th><th>#</th><th>#</th>
                </tr>
            </thead>

			<tr>
				<td>#</td><td>#</td><td>#</td>
			</tr>

			<tr>
				<td>#</td><td>#</td><td>#</td>
			</tr>

			<tr>
				<td>#</td><td>#</td><td>#</td>
			</tr>
        </table>
    </main>
    <script src="{{ asset('js/managerDashboard.js') }}"></script>
</body>
</html>