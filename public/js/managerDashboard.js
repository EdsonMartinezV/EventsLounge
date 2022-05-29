(() => {
    const $main = document.getElementById('main'),
            $usersButton = document.getElementById('usersButton'),
            $packsButton = document.getElementById('packsButton'),
            $eventsButton = document.getElementById('eventsButton'),
            $paidsButton = document.getElementById('paidsButton'),
            $mainTable = document.getElementById('mainTable'),
            $mainTableHeadRow = document.getElementById('mainTableHeadRow'),
            $mainTableBody = document.getElementById('mainTableBody'),
            $fragment = document.createDocumentFragment();
    
    $usersButton.addEventListener('click', () => {
        fetch('/manager/users')
            .then((res) => res.ok ? res.json() : Promise.reject(res))
            .then((users) => {
                $mainTableHeadRow.innerHTML = ''
                $mainTableBody.innerHTML = ''

                const $tdId = document.createElement('td'),
                    $tdName = document.createElement('td',),
                    $tdSurName = document.createElement('td'),
                    $tdEmail = document.createElement('td'),
                    $tdRole = document.createElement('td')

                $tdId.textContent = 'ID'
                $tdName.textContent = 'Nombre'
                $tdSurName.textContent = 'Apellidos'
                $tdEmail.textContent = 'Email'
                $tdRole.textContent = 'Rol'

                $fragment.appendChild($tdId)
                $fragment.appendChild($tdName)
                $fragment.appendChild($tdSurName)
                $fragment.appendChild($tdEmail)
                $fragment.appendChild($tdRole)
                $mainTableHeadRow.appendChild($fragment)

                users.forEach((user) => {
                    const $tr = document.createElement('tr'),
                        $tdId = document.createElement('td'),
                        $tdName = document.createElement('td'),
                        $tdSurName = document.createElement('td'),
                        $tdEmail = document.createElement('td'),
                        $tdRole = document.createElement('td')

                    $tdId.textContent = user.id
                    $tdName.textContent = user.name
                    $tdSurName.textContent = user.surname
                    $tdEmail.textContent = user.email
                    $tdRole.textContent = user.role

                    $tr.appendChild($tdId)
                    $tr.appendChild($tdName)
                    $tr.appendChild($tdSurName)
                    $tr.appendChild($tdEmail)
                    $tr.appendChild($tdRole)
                    $mainTableBody.appendChild($tr)
                })
            }).catch((err) => {
                console.error(`Error ${err.status}: ${err.statusText}`);
                $main.innerHTML = `Error ${err.status}: ${err.statusText}`
            })
    })

    $packsButton.addEventListener('click', () => {
        fetch('/manager/packs')
            .then((res) => res.ok ? res.json() : Promise.reject(res))
            .then((packs) => {
                console.log(packs);
            }).catch((err) => {
                console.error(`Error ${err.status}: ${err.statusText}`);
                $main.innerHTML = `Error ${err.status}: ${err.statusText}`
            })
    })

    $eventsButton.addEventListener('click', () => {
        fetch('/manager/events')
            .then((res) => res.ok ? res.json() : Promise.reject(res))
            .then((events) => {
                console.log(events);
            }).catch((err) => {
                console.error(`Error ${err.status}: ${err.statusText}`);
                $main.innerHTML = `Error ${err.status}: ${err.statusText}`
            })
    })

    $paidsButton.addEventListener('click', () => {
        fetch('/manager/paids')
            .then((res) => res.ok ? res.json() : Promise.reject(res))
            .then((paids) => {
                console.log(paids);
            }).catch((err) => {
                console.error(`Error ${err.status}: ${err.statusText}`);
                $main.innerHTML = `Error ${err.status}: ${err.statusText}`
            })
    })
})()