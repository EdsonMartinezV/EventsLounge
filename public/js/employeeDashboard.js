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




document.getElementById('eventsPaid').addEventListener('click',function paids(e) {
    
    //se limpia lo que trae la tabla
    $mainTableHeadRow = document.getElementById('mainTableHeadRow'),
    $mainTableBody = document.getElementById('mainTableBody'),
    $fragment = document.createDocumentFragment();


    fetch("/api/events-paids")
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
                $tdImage.textContent = 'Abono'
                $tdUser.textContent = 'Usuario'
                $tdUpdate.textContent = 'Añadir'

                $fragment.appendChild($tdId)
                $fragment.appendChild($tdEventDate)
                $fragment.appendChild($tdPrice)
                $fragment.appendChild($tdIsConfirmed)
                $fragment.appendChild($tdIsRealized)
                $fragment.appendChild($tdUser)
                $fragment.appendChild($tdImage)
                //$fragment.appendChild($tdUpdate)
                $mainTableHeadRow.appendChild($fragment)

                data.forEach((event) => {
                    const $tr = document.createElement('tr'),
                        $tdId = document.createElement('td'),
                        $tdEventDate = document.createElement('td'),
                        $tdPrice = document.createElement('td'),
                        $tdIsConfirmed = document.createElement('td'),
                        $tdIsRealized = document.createElement('td'),
                        $tdUser = document.createElement('td')
                        $paid = document.createElement('input')
                        $send = document.createElement('button')
                        $send.textContent = 'Enviar'

                        

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

                    $tr.appendChild($send)
                    

                    $mainTableBody.appendChild($tr) 

                    $send.addEventListener('click',function(e) {
                
                        fetch("/api/add-paid/"+event.id, {
                })
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
                    $tdImage.textContent = 'Abono'
                    $tdUser.textContent = 'Usuario'
                    $tdUpdate.textContent = 'Añadir'
    
                    $fragment.appendChild($tdId)
                    $fragment.appendChild($tdEventDate)
                    $fragment.appendChild($tdPrice)
                    $fragment.appendChild($tdIsConfirmed)
                    $fragment.appendChild($tdIsRealized)
                    $fragment.appendChild($tdUser)
                    $fragment.appendChild($tdImage)
                    //$fragment.appendChild($tdUpdate)
                    $mainTableHeadRow.appendChild($fragment)
    
                    data.forEach((event) => {
                        const $tr = document.createElement('tr'),
                            $tdId = document.createElement('td'),
                            $tdEventDate = document.createElement('td'),
                            $tdPrice = document.createElement('td'),
                            $tdIsConfirmed = document.createElement('td'),
                            $tdIsRealized = document.createElement('td'),
                            $tdUser = document.createElement('td')
                            $paid = document.createElement('input')
                            $send = document.createElement('button')
                            $send.textContent = 'Enviar'
                            $paid.setAttribute('type','number')
                            $paid.setAttribute('id','inputPaid')
                            
    
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
                        $tr.appendChild($paid)
                        $tr.appendChild($send)

                        $mainTableBody.appendChild($tr) 

                        //----Evento guardar abono----//
                        
                        $send.addEventListener('click',function(e) {
                        
                            var dataPaid = {
                                amount: document.getElementById('inputPaid').value
                            }
                            console.log(dataPaid)
                            fetch("/api/save-paid/"+event.id, {
                            body: JSON.stringify(dataPaid),
                            method: "POST",
                            headers:{
                                'X-CSRF-TOKEN': '{{ csrf_token()}}',
                                "Content-type": "application/json; charset=UTF-8"
                            }
                    })
                    .then(function(response){
                        if(response.ok){
                            return response.json();
                        }else{
                            throw "Error en la llamada AJAX";
                        }
                    })
                    .then(function(text){
                        //recarga los datos de la tabla
                        paids(e);
                    })
                    .catch(function(err){
                        console.log(err);
                    });
                    });
                    })
                    
                })
                .catch(function(err){
                    console.log(err);
                });
                });

        })

        })
    .catch(function(err){
        console.log(err);
    });
});