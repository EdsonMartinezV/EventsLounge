(() => {
    const $main = document.getElementById('main'),
            $usersButton = document.getElementById('usersButton'),
            $packsButton = document.getElementById('packsButton'),
            $eventsButton = document.getElementById('eventsButton'),
            $paidsButton = document.getElementById('paidsButton'),
            $billsButton = document.getElementById('billsButton'),
            $mainTable = document.getElementById('mainTable'),
            $mainTableHeadRow = document.getElementById('mainTableHeadRow'),
            $mainTableBody = document.getElementById('mainTableBody'),
            $tableTitle = document.getElementById('tableTitle'),
            $createLink = document.getElementById('createLink'),
            $fragment = document.createDocumentFragment();
    
    $usersButton.addEventListener('click', () => {
        fetch('/manager/users')
            .then((res) => res.ok ? res.json() : Promise.reject(res))
            .then((users) => {
                $tableTitle.innerText = 'Usuarios';
                $mainTableHeadRow.innerHTML = ''
                $mainTableBody.innerHTML = ''
                $createLink.textContent = '';

                const $tdId = document.createElement('td'),
                    $tdName = document.createElement('td',),
                    $tdSurName = document.createElement('td'),
                    $tdEmail = document.createElement('td'),
                    $tdRole = document.createElement('td'),
                    $tdResetPassword = document.createElement('td')

                $tdId.textContent = 'ID'
                $tdName.textContent = 'Nombre'
                $tdSurName.textContent = 'Apellidos'
                $tdEmail.textContent = 'Email'
                $tdRole.textContent = 'Rol'
                $tdResetPassword.textContent = 'Reestablecer contraseña'

                $fragment.appendChild($tdId)
                $fragment.appendChild($tdName)
                $fragment.appendChild($tdSurName)
                $fragment.appendChild($tdEmail)
                $fragment.appendChild($tdRole)
                $fragment.appendChild($tdResetPassword)
                $mainTableHeadRow.appendChild($fragment)

                users.forEach((user) => {
                    const $tr = document.createElement('tr'),
                        $tdId = document.createElement('td'),
                        $tdName = document.createElement('td'),
                        $tdSurName = document.createElement('td'),
                        $tdEmail = document.createElement('td'),
                        $tdRole = document.createElement('td'),
                        $tdResetPassword = document.createElement('td'),
                        $aResetPassword = document.createElement('a')

                    $tdId.textContent = user.id
                    $tdName.textContent = user.name
                    $tdSurName.textContent = user.surname
                    $tdEmail.textContent = user.email
                    $tdRole.textContent = user.role
                    $aResetPassword.textContent = 'Reestablecer contraseña'
                    $aResetPassword.href = `/manager/users/reset-password/${user.id}`

                    $tr.appendChild($tdId)
                    $tr.appendChild($tdName)
                    $tr.appendChild($tdSurName)
                    $tr.appendChild($tdEmail)
                    $tr.appendChild($tdRole)
                    $tdResetPassword.appendChild($aResetPassword)
                    $tr.appendChild($tdResetPassword)
                    $mainTableBody.appendChild($tr)
                })
                $createLink.textContent = 'Crear usuario'
                $createLink.setAttribute('href', '/manager/users/create')
                $main.appendChild($createLink)
            }).catch((err) => {
                console.error(`Error ${err.status}: ${err.statusText}`);
                $main.innerHTML = `Error ${err.status}: ${err.statusText}`
            })
    })

    $packsButton.addEventListener('click', () => {
        fetch('/manager/packs')
            .then((res) => res.ok ? res.json() : Promise.reject(res))
            .then((packs) => {
                $tableTitle.innerText = 'Paquetes';
                $mainTableHeadRow.innerHTML = ''
                $mainTableBody.innerHTML = ''
                $createLink.textContent = '';

                const $tdId = document.createElement('td'),
                    $tdName = document.createElement('td',),
                    $tdPrice = document.createElement('td'),
                    $tdIsActive = document.createElement('td')
                    
                $tdId.textContent = 'ID'
                $tdName.textContent = 'Nombre'
                $tdPrice.textContent = 'Precio'
                $tdIsActive.textContent = 'Activo'
                
                $fragment.appendChild($tdId)
                $fragment.appendChild($tdName)
                $fragment.appendChild($tdPrice)
                $fragment.appendChild($tdIsActive)
                $mainTableHeadRow.appendChild($fragment)

                packs.forEach((pack) => {
                    const $tr = document.createElement('tr'),
                        $tdId = document.createElement('td'),
                        $tdName = document.createElement('td'),
                        $tdPrice = document.createElement('td'),
                        $tdIsActive = document.createElement('td')

                    $tdId.textContent = pack.id
                    $tdName.textContent = pack.name
                    $tdPrice.textContent = `$ ${pack.price}`
                    $tdIsActive.textContent = pack.is_active ? 'Si' : 'No'

                    $tr.appendChild($tdId)
                    $tr.appendChild($tdName)
                    $tr.appendChild($tdPrice)
                    $tr.appendChild($tdIsActive)
                    $mainTableBody.appendChild($tr)
                })
                $createLink.textContent = 'Crear paquete'
                $createLink.setAttribute('href', '/manager/packs/create')
                $main.appendChild($createLink)
            }).catch((err) => {
                console.error(`Error ${err.status}: ${err.statusText}`);
                $main.innerHTML = `Error ${err.status}: ${err.statusText}`
            })
    })

    $eventsButton.addEventListener('click', () => {
        fetch('/manager/events')
            .then((res) => res.ok ? res.json() : Promise.reject(res))
            .then((events) => {
                $tableTitle.innerText = 'Eventos';
                $mainTableHeadRow.innerHTML = ''
                $mainTableBody.innerHTML = ''
                $createLink.textContent = '';

                const $tdId = document.createElement('td'),
                    $tdEventDate = document.createElement('td',),
                    $tdPrice = document.createElement('td'),
                    $tdIsConfirmed = document.createElement('td'),
                    $tdIsRealized = document.createElement('td'),
                    $tdUser = document.createElement('td'),
                    $tdEdit = document.createElement('td')

                $tdId.textContent = 'ID'
                $tdEventDate.textContent = 'Fecha del evento'
                $tdPrice.textContent = 'Precio'
                $tdIsConfirmed.textContent = 'Confirmado'
                $tdIsRealized.textContent = 'Realizado'
                $tdUser.textContent = 'Usuario'
                $tdEdit.textContent = 'Editar'

                $fragment.appendChild($tdId)
                $fragment.appendChild($tdEventDate)
                $fragment.appendChild($tdPrice)
                $fragment.appendChild($tdIsConfirmed)
                $fragment.appendChild($tdIsRealized)
                $fragment.appendChild($tdUser)
                $fragment.appendChild($tdEdit)
                $mainTableHeadRow.appendChild($fragment)

                events.forEach((event) => {
                    const $tr = document.createElement('tr'),
                        $tdId = document.createElement('td'),
                        $tdEventDate = document.createElement('td'),
                        $tdPrice = document.createElement('td'),
                        $tdIsConfirmed = document.createElement('td'),
                        $tdIsRealized = document.createElement('td'),
                        $tdUser = document.createElement('td'),
                        $tdEdit = document.createElement('td'),
                        $aEdit = document.createElement('a')

                    $tdId.textContent = event.id
                    $tdEventDate.textContent = event.event_date
                    $tdPrice.textContent = `$ ${event.price}`
                    $tdIsConfirmed.textContent = event.is_confirmed == 1 ? 'Si' : 'No'
                    $tdIsRealized.textContent = event.is_realized == 1 ? 'Si' : 'No'
                    $tdUser.textContent = event.user_id
                    $aEdit.textContent = 'Editar'
                    $aEdit.setAttribute('href', `/manager/events/edit/${event.id}`)

                    $tr.appendChild($tdId)
                    $tr.appendChild($tdEventDate)
                    $tr.appendChild($tdPrice)
                    $tr.appendChild($tdIsConfirmed)
                    $tr.appendChild($tdIsRealized)
                    $tr.appendChild($tdUser)
                    $tdEdit.appendChild($aEdit)
                    $tr.appendChild($tdEdit)
                    $mainTableBody.appendChild($tr)
                })
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
                $tableTitle.innerText = 'Abonos';
                $mainTableHeadRow.innerHTML = ''
                $mainTableBody.innerHTML = ''
                $createLink.textContent = '';

                const $tdId = document.createElement('td'),
                    $tdAmount = document.createElement('td',),
                    $tdEventId = document.createElement('td')
                    
                $tdId.textContent = 'ID'
                $tdAmount.textContent = 'Costo'
                $tdEventId.textContent = 'Evento'
                
                $fragment.appendChild($tdId)
                $fragment.appendChild($tdAmount)
                $fragment.appendChild($tdEventId)
                $mainTableHeadRow.appendChild($fragment)

                paids.forEach((paid) => {
                    const $tr = document.createElement('tr'),
                        $tdId = document.createElement('td'),
                        $tdAmount = document.createElement('td'),
                        $tdEventId = document.createElement('td')
                        
                    $tdId.textContent = paid.id
                    $tdAmount.textContent = paid.amount
                    $tdEventId.textContent = paid.event_id

                    $tr.appendChild($tdId)
                    $tr.appendChild($tdAmount)
                    $tr.appendChild($tdEventId)
                    $mainTableBody.appendChild($tr)
                })
                console.log(paids)
            }).catch((err) => {
                console.error(`Error ${err.status}: ${err.statusText}`);
                $main.innerHTML = `Error ${err.status}: ${err.statusText}`
            })
    })

    $billsButton.addEventListener('click', () => {
        
    })
})()