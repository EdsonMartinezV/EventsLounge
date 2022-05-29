<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
@include ('header')
<button class="btn btn-primary btn-lg" id="btn-bookings">Listar</button>
<center><h1>Mis Eventos</h1></center>
<center><h3>{{Auth::user()->name}}</h3></center>
<div class="card-body">
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
</div>
<div id="results"></div>

<script>
    document.getElementById('btn-bookings').addEventListener('click',function tolist(e) {
        e.preventDefault();
        //se limpia lo que trae la tabla
        var Table = document.getElementById("bookings");
            Table.innerHTML = "";
       const $fragment = document.createDocumentFragment()

        fetch("/my-bookings")
        .then(function(response){
            if(response.ok){
               return response.json();
            }else{
                throw "Error en la llamada AJAX";
            }
        })
        .then(function(data){
            const $bookings = document.getElementById('bookings')

            data.forEach((event) => {

                const $tr = document.createElement('tr')
                const $td1 = document.createElement('td')
                const $td2 = document.createElement('td')
                const $td3 = document.createElement('td')
                const $td4 = document.createElement('td')
                const $td5 = document.createElement('td')
                const $td6 = document.createElement('td')
                const $td7 = document.createElement('td')

                const $buttonUpdate = document.createElement('button')
                const $buttonDelete = document.createElement('button')
               

                $buttonUpdate.textContent = "Actualizar"
                $buttonDelete.textContent = "Eliminar"

                $td1.textContent = event.id
                $td1.id = 'id_event'
                $td2.textContent = event.event_date
                $td3.textContent = event.price
                $td4.textContent = event.user_id
                if(event.is_confirmed == '0'){
                    $td7.textContent = 'No'
                }
                else{
                    $td7.textContent = 'Si' 
                }
                $tr.appendChild($td1)
                $tr.appendChild($td2)
                $tr.appendChild($td3)
                
                $tr.appendChild($td4)
                $tr.appendChild($td7)
               
               

                if(event.is_confirmed == '0'){
                    $td5.appendChild($buttonUpdate)
                    $tr.appendChild($td5)
                    $td6.appendChild($buttonDelete)
                    $buttonDelete.id = 'btn-delete';
                    $buttonDelete.setAttribute("value", event.id);
                    $tr.appendChild($td6)
                }
                else{
                    $td5.textContent = 'confirmado'
                    $tr.appendChild($td5)
                    $td6.textContent = 'confirmado'
                    $tr.appendChild($td6)
                }
                
                $fragment.appendChild($tr)
                
                $bookings.appendChild($fragment)
              
                  //Accion del boton eliminar
        
                var datadelete = {
                    id_event: event.id
                }
            
          
            $buttonDelete.addEventListener('click',function(e) {
                
                fetch("/delete-bookings", {
                body: JSON.stringify(datadelete),
                method: "DELETE",
                headers:{
                    'X-CSRF-TOKEN': '{{ csrf_token()}}',
                    "Content-type": "application/json; charset=UTF-8"
                }
        })
        .then(function(response){
            if(response.ok){
                return response.text()
            }else{
                throw "Error en la llamada AJAX";
            }
        })
        .then(function(text){
            //se limpia lo que trae la tabla
            var Table = document.getElementById("bookings");
            Table.innerHTML = "";
            //recarga los datos de la tabla
            tolist(e);
        })
        .catch(function(err){
            console.log(err);
        });
        });
        //cierra primer listener
            })
          
        })
        .catch(function(err){
            console.log(err);
        });
});
    
        
    </script>
</body>

</html>