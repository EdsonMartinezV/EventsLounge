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
                        $tdImageUb = document.createElement('input')
                        $tdform= document.createElement('FORM')
                        $tdform.setAttribute('enctype','multipart/form-data');

                        $tdUpdateb = document.createElement('button')
                        $tdUpdateb.textContent = 'añadir foto';

                    $tdImageUb.setAttribute('id','image')
                    $tdImageUb.setAttribute('type','file')
                    $tdImageUb.setAttribute('class','form-control-file')
                    $tdImageUb.setAttribute('accept','image/*')

                   
                    $tdform.setAttribute('id','form');
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
                    $tr.appendChild($tdImageUb)
                    $tr.appendChild($tdUpdateb)
                    $mainTableBody.appendChild($tr) 

                   
                 
                   
                    $tdUpdateb.addEventListener('click',function(e) {
                         var file = new FormData();
                        $tdform.appendChild($tdImageUb)
                        var dataimage = {
                        
                            image: document.getElementById('image').files[0]
                        }
                        console.log(document.getElementById('image').files[0])
                        fetch("/api/events-images/"+event.id, {
                        body: JSON.stringify(dataimage),
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



document.getElementById('eventsPaid').addEventListener('click',function tolist(e) {
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
                        $tdform= document.createElement('FORM')
                        $tdform.enctype =  "multipart/form-data";

                        $tdImageUb = document.createElement('button')

                    $tdImageUb.setAttribute('id','image')
                    $tdImageU.setAttribute('type','file')
                    $tdImageUb.setAttribute('class','form-control-file')
                    $tdImageUb.setAttribute('accept','image/*')

                    $tdform.appendChild($tdImageUb)
                    $tdform.setAttribute('id','form')
                        
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
                    $tr.appendChild($tdImageU)
                    $tr.appendChild($tdUpdateb)
                    $mainTableBody.appendChild($tr) 

                    var dataimage = {
                        image: document.getElementById('image').files[0]
                    }
                 

                    $tdUpdateb.addEventListener('click',function(e) {
                       
                        fetch("/api/events-images/"+event.id, {
                        body: JSON.stringify(dataimage),
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