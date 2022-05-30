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

        $mainTableHeadRow.innerHTML = ''
                $mainTableBody.innerHTML = ''

                const $tdId = document.createElement('td'),
                    $tdEventDate = document.createElement('td',),
                    $tdPrice = document.createElement('td'),
                    $tdIsConfirmed = document.createElement('td'),
                    $tdIsRealized = document.createElement('td'),
                    $tdUser = document.createElement('td')
                    $tdUpdate = document.createElement('td')

                $tdId.textContent = 'ID'
                $tdEventDate.textContent = 'Fecha del evento'
                $tdPrice.textContent = 'Precio'
                $tdIsConfirmed.textContent = 'Confirmado'
                $tdIsRealized.textContent = 'Realizado'
                $tdUser.textContent = 'Usuario'
                $tdUpdate.textContent = 'Actualizar'

                $fragment.appendChild($tdId)
                $fragment.appendChild($tdEventDate)
                $fragment.appendChild($tdPrice)
                $fragment.appendChild($tdIsConfirmed)
                $fragment.appendChild($tdIsRealized)
                $fragment.appendChild($tdUser)
                $mainTableHeadRow.appendChild($fragment)

                data.forEach((event) => {
                    const $tr = document.createElement('tr'),
                        $tdId = document.createElement('td'),
                        $tdEventDate = document.createElement('td'),
                        $tdPrice = document.createElement('td'),
                        $tdIsConfirmed = document.createElement('td'),
                        $tdIsRealized = document.createElement('td'),
                        $tdUser = document.createElement('td')
                        $tdUpdate = document.createElement('input')

                    $tdId.textContent = event.id
                    $tdEventDate.textContent = event.event_date
                    $tdPrice.textContent = event.price
                    event.is_confirmed == 1 ? $tdIsConfirmed.textContent = 'Si' : $tdIsConfirmed.textContent = 'No'
                    event.is_realized == 1 ? $tdIsRealized.textContent = 'Si' : $tdIsRealized.textContent = 'No'
                    $tdUser.textContent = event.user_id

                    $tr.appendChild($tdId)
                    $tr.appendChild($tdEventDate)
                    $tr.appendChild($tdPrice)
                    $tr.appendChild($tdIsConfirmed)
                    $tr.appendChild($tdIsRealized)
                    $tr.appendChild($tdUser)
                    $mainTableBody.appendChild($tr)
    
        

})

})
    .catch(function(err){
        console.log(err);
    });
});

document.getElementById('realizedButton').addEventListener('click',function tolist(e) {
    e.preventDefault();
    //se limpia lo que trae la tabla
    $mainTableHeadRow = document.getElementById('mainTableHeadRow'),
    $mainTableBody = document.getElementById('mainTableBody'),
    $fragment = document.createDocumentFragment();


    fetch("/api/events-realized")
    .then(function(response){
        if(response.ok){
           return response.json();
        }else{
            throw "Error en la llamada AJAX";
        }
    })
    .then(function(data){

        $mainTableHeadRow.innerHTML = ''
                $mainTableBody.innerHTML = ''

                const $tdId = document.createElement('td'),
                    $tdEventDate = document.createElement('td',),
                    $tdPrice = document.createElement('td'),
                    $tdIsConfirmed = document.createElement('td'),
                    $tdIsRealized = document.createElement('td'),
                    $tdUser = document.createElement('td')
                    $tdImage = document.createElement('td')
                    $tdUpdate= document.createElement('td')

                $tdId.textContent = 'ID'
                $tdEventDate.textContent = 'Fecha del evento'
                $tdPrice.textContent = 'Precio'
                $tdIsConfirmed.textContent = 'Confirmado'
                $tdIsRealized.textContent = 'Realizado'
                $tdImage.textContent = 'Imagen'
                $tdUser.textContent = 'Usuario'
                $tdUpdate.textContent = 'Actualizar'

                $fragment.appendChild($tdId)
                $fragment.appendChild($tdEventDate)
                $fragment.appendChild($tdPrice)
                $fragment.appendChild($tdIsConfirmed)
                $fragment.appendChild($tdIsRealized)
                $fragment.appendChild($tdUser)
                $fragment.appendChild($tdImage)
                $fragment.appendChild($tdUpdate)
                $mainTableHeadRow.appendChild($fragment)

                data.forEach((event) => {
                    const $tr = document.createElement('tr'),
                        $tdId = document.createElement('td'),
                        $tdEventDate = document.createElement('td'),
                        $tdPrice = document.createElement('td'),
                        $tdIsConfirmed = document.createElement('td'),
                        $tdIsRealized = document.createElement('td'),
                        $tdUser = document.createElement('td')
                        $tdImage = document.createElement('input')
                        $tdUpdateb = document.createElement('button')

                    $tdImage.setAttribute('type','file')
                    $tdImage.setAttribute('accept','image/*')
                        
                    $tdUpdateb.textContent = 'Actualizar'
                    $tdId.textContent = event.id
                    $tdEventDate.textContent = event.event_date
                    $tdPrice.textContent = event.price
                    event.is_confirmed == 1 ? $tdIsConfirmed.textContent = 'Si' : $tdIsConfirmed.textContent = 'No'
                    event.is_realized == 1 ? $tdIsRealized.textContent = 'Si' : $tdIsRealized.textContent = 'No'
                    $tdUser.textContent = event.user_id

                    $tr.appendChild($tdId)
                    $tr.appendChild($tdEventDate)
                    $tr.appendChild($tdPrice)
                    $tr.appendChild($tdIsConfirmed)
                    $tr.appendChild($tdIsRealized)
                    $tr.appendChild($tdUser)
                    $tr.appendChild($tdImage)
                    $tr.appendChild($tdUpdateb)
                    $mainTableBody.appendChild($tr)
    
        

})

})
    .catch(function(err){
        console.log(err);
    });
});