const $main = document.getElementById('main'),
$imagesButton = document.getElementById('imagesButton')
$mainTableHeadRow = document.getElementById('mainTableHeadRow'),
$mainTableBody = document.getElementById('mainTableBody'),
$tableTitle = document.getElementById('tableTitle'),
$createLink = document.getElementById('createLink'),
$fragment = document.createDocumentFragment();

$imagesButton.addEventListener('click', () => {
    fetch('/manager/images/show')
        .then((res) => res.ok ? res.json() : Promise.reject(res))
        .then((events) => {
            console.log(events)
            $tableTitle.innerText = 'Eventos';
            $mainTableHeadRow.innerHTML = ''
            $mainTableBody.innerHTML = ''
            $createLink.textContent = '';

            const $tdId = document.createElement('td'),
                $tdEventDate = document.createElement('td',),
                $tdPrice = document.createElement('td'),
                $tdUser = document.createElement('td'),
                $tdimages = document.createElement('td')

            $tdId.textContent = 'ID'
            $tdEventDate.textContent = 'Fecha del evento'
            $tdPrice.textContent = 'Precio'
            $tdUser.textContent = 'Usuario'
            $tdimages.textContent = 'Editar fotos'

            $fragment.appendChild($tdId)
            $fragment.appendChild($tdEventDate)
            $fragment.appendChild($tdPrice)
            $fragment.appendChild($tdUser)
            $fragment.appendChild($tdimages)
            $mainTableHeadRow.appendChild($fragment)

            events.forEach((event) => {
                const $tr = document.createElement('tr'),
                    $tdId = document.createElement('td'),
                    $tdEventDate = document.createElement('td'),
                    $tdPrice = document.createElement('td'),
                    $tdUser = document.createElement('td'),
                    $tdImages = document.createElement('td'),
                    $aImages = document.createElement('a')

                $tdId.textContent = event.id
                $tdEventDate.textContent = event.event_date
                $tdPrice.textContent = `$ ${event.price}`
                $tdUser.textContent = event.user_id
                $aImages.textContent = 'Editar'
                $aImages.setAttribute('href', `/manager/images/update/${event.id}`)

                $tr.appendChild($tdId)
                $tr.appendChild($tdEventDate)
                $tr.appendChild($tdPrice)
                $tr.appendChild($tdUser)
                $tdImages.appendChild($aImages)

                $tr.appendChild($tdImages)

                $mainTableBody.appendChild($tr)
            })
            console.log(events);
        }).catch((err) => {
            console.error(`Error ${err.status}: ${err.statusText}`);
            $main.innerHTML = `Error ${err.status}: ${err.statusText}`
        })
})