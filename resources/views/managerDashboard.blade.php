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
		    	<a id="usersButton"><img src="/images/user.png" width="30px"> Ver Usuarios</a>
		    	<a id="packsButton"><img src="/images/oferta.png" width="30px"> Ver Paquetes</a>
		    	<a id="eventsButton"><img src="/images/evento.png" width="30px"> Ver Eventos</a>
		    	<a id="paidsButton"><img src="/images/pago.png" width="30px"> Ver abonos</a>
		    	<a id="billsButton"><img src="/images/pago.png" width="30px"> Ver Gastos</a>
		    </nav>
		    <label for="btn-menu">✖️</label>
	    </div>
    </div>
    <main id="main">
</br>
</br>
<center><h2 id="tableTitle"></h2></center>
        <table class="table" id="mainTable">
            <thead>
                <tr id="mainTableHeadRow">

                </tr>
            </thead>
			<tbody id="mainTableBody">
			
			</tbody>
        </table><br>
		<a id="createLink"></a>
    </main>
    <script src="{{ asset('js/managerDashboard.js') }}"></script>
</body>
</html>