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
		    	<a id="usersButton">Ver Usuarios</a>
		    	<a id="packsButton">Ver Paquetes</a>
		    	<a id="eventsButton">Ver Eventos</a>
		    	<a id="paidsButton">Ver abonos</a>
		    </nav>
		    <label for="btn-menu">✖️</label>
	    </div>
    </div>
    <main id="main">
		<h2>Usuarios</h2>{{-- @Josdav --}}
        <table class="table" id="mainTable">
            <thead>
                <tr id="mainTableHeadRow">

                </tr>
            </thead>
			<tbody id="mainTableBody">
			
			</tbody>
        </table>
    </main>
    <script src="{{ asset('js/managerDashboard.js') }}"></script>
</body>
</html>