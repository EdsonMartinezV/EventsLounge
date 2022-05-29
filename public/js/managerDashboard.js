(() => {
    const $main = document.getElementById('main'),
            $usersButton = document.getElementById('usersButton'),
            $packsButton = document.getElementById('packsButton'),
            $eventsButton = document.getElementById('eventsButton'),
            $paidsButton = document.getElementById('paidsButton')
            $fragment = document.createDocumentFragment();
    
        $usersButton.addEventListener('click', () => {
            console.log('users');
        })

        $packsButton.addEventListener('click', () => {
            console.log('packs');
        })

        $eventsButton.addEventListener('click', () => {
            console.log('events');
        })

        $paidsButton.addEventListener('click', () => {
            console.log('paids');
        })
})()