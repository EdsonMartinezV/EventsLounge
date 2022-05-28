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
<center><h1>Mis bookings</h1></center>
<center><h1>{{Auth::user()->name}}</h1></center>
<div class="card-body">
    <table class="table table-bordered table-striped" id="bookings">
        <thead>
            <tr>
                <th>id evento</th>
                <th>Fecha evento</th>
                <th>precio</th>
                <th>Usuario</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            {{-- <tr>
                <td>2</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td><button type="button" value="">Actualizar</button></td>
                <td><button type="button" value="">Eliminar</button></td> 
            </tr> --}}
        </tbody>
    </table>
</div>
<div id="results"></div>

<script>
    document.getElementById('btn-bookings').addEventListener('click',function(e) {
        e.preventDefault();
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
 /*           // document.getElementById('results').innerText=text
            var x = document.getElementById("bookings").rows[0].cells;
            text = JSON.stringify(text)
            document.getElementById('results').innerText=text
            //console.log(text) */

            console.log(data)

            const $bookings = document.getElementById('bookings')

            data.forEach((event) => {

                const $tr = document.createElement('tr')
                const $td1 = document.createElement('td')
                const $td2 = document.createElement('td')
                const $td3 = document.createElement('td')
                const $td4 = document.createElement('td')
                const $td5 = document.createElement('td')
                const $td6 = document.createElement('td')

                const $buttonUpdate = document.createElement('button')
                const $buttonDelete = document.createElement('button')

                $buttonUpdate.textContent = "Actualizar"
                $buttonDelete.textContent = "Eliminar"

                $td1.textContent = event.id
                $td2.textContent = event.event_date
                $td3.textContent = event.price
                $td4.textContent = event.user_id
                $td5.appendChild($buttonUpdate)
                $td6.appendChild($buttonDelete)
           

                $tr.appendChild($td1)
                $tr.appendChild($td2)
                $tr.appendChild($td3)
                $tr.appendChild($td4)
                $tr.appendChild($td5)
                $tr.appendChild($td6)


                $fragment.appendChild($tr)
                $bookings.appendChild($fragment)
                

            })
        
             
          

        })
        .catch(function(err){
            console.log(err);
        });
});
    </script>
</body>

</html>