document.getElementById('eventsButton').addEventListener('click',function tolist(e) {
    e.preventDefault();
    //se limpia lo que trae la tabla
    $mainTableHeadRow = document.getElementById('mainTableHeadRow'),
    $mainTableBody = document.getElementById('mainTableBody'),
    $fragment = document.createDocumentFragment();


    fetch("/api/events-confirmated")
    .then(function(response){
        if(response.ok){
           return response.json();
        }else{
            throw "Error en la llamada AJAX";
        }
    })
    .then(function(data){

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
            
            $mainTableBody.appendChild($fragment)
          
              //Accion del boton eliminar
    
        

})

})
    .catch(function(err){
        console.log(err);
    });
});