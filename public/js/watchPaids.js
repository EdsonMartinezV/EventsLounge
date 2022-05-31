document.getElementById('paids').addEventListener('click',function tolist(e) {
    e.preventDefault();
    //se limpia lo que trae la tabla
    $mainTableHeadRow = document.getElementById('mainTableHeadRow'),
    $mainTableBody = document.getElementById('mainTableBody'),
    $fragment = document.createDocumentFragment();


    fetch("/api/all-paids")
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
                $tdamount = document.createElement('td',),
                $tdevent_id = document.createElement('td')

                $tdId.textContent = 'ID'
                $tdamount.textContent = 'Abono'
                $tdevent_id.textContent = 'Evento'

                $fragment.appendChild($tdId)
                $fragment.appendChild($tdamount)
                $fragment.appendChild($tdevent_id)
                $mainTableHeadRow.appendChild($fragment)

                data.forEach((event) => {
                    const $tr = document.createElement('tr'),
                        $tdId = document.createElement('td'),
                        $tdamount = document.createElement('td'),
                        $tdevent_id = document.createElement('td')


                    $tdId.textContent = event.id
                    $tdamount.textContent = event.amount
                    $tdevent_id.textContent = event.event_id

                    $tr.appendChild($tdId)
                    $tr.appendChild($tdamount)
                    $tr.appendChild($tdevent_id)

                    $mainTableBody.appendChild($tr)
    
        
})

})
    .catch(function(err){
        console.log(err);
    });
});
