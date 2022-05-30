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
			<div class="logo">
				<h1>Employee Dashboard</h1>
			</div>
		</div>
	<div class="capa"></div>


<main id="main">
	<table class="table" id="mainTable">
		<thead>
			<tr id="mainTableHeadRow">
                <td>ID</td>
                <td>Fecha de evento</td>
                <td>Precio</td>
                <td>Confirmado</td>
                <td>Realizado</td>
                <td>Usuario</td>
                <td>Imagen</td>
			</tr>
		</thead>
		<tbody id="mainTableBody">
            <tr>
                @foreach ($bookings as $booking)
                    
                <td> {{$booking->id}}</td>
                <td> {{$booking->event_date}}</td>
                <td> {{$booking->price}}</td>
                <td> @if ($booking->is_confirmed==1)
                        si
                    @else
                        No 
                    @endif</td>
                    <td> @if ($booking->is_realized==1)
                        si
                    @else
                        No 
                    @endif</td></td>
                <td> {{$booking->user_id}}</td>
                <td> 
                    <form action="events-images/{{$booking->id}}"  method="post" enctype="multipart/form-data">
                        <fieldset>
                            @csrf
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Agregue su imagen</label>
                                    <input type="file" class="form-control-file" id="imagen[]" name="images[]" multiple
                                    accept="image/*" required>
                                  </div>
                            </div>
    
                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </td>
            </tr>
            @endforeach
           
		</tbody>
	</table>
    <a href="/employee" class="btn btn-success">Regresar al principal</a>
</main>

<script src="{{ asset('js/employeeDashboard.js') }}"></script>
</body>
</html>