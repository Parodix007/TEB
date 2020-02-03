(function(){
    const dane = [
        `N9TT-9G0A-B7FQ-RANC`,
        `QK6A-JI6S-7ETR-0A6C`,
        `SXFP-CHYK-ONI6-S89U`,
        `XNSS-HSJW-3NGU-8XTJ`,
        `NHLE-L6MI-4GE4-ETEV`,
        `6ETI-UIL2-9WAX-XHYO`,
        `2E62-E3SR-33FI-XHV3`,
        `7EIQ-72IU-2YNV-3L4Y`,
    ]

    
    document.getElementById('tag').innerHTML = `Twój Tag: ${dane[Math.round(Math.random() * (dane.length-1))]}`

    document.getElementsByClassName('btn-success')[0].addEventListener('click', () => {
        if(dane.indexOf(document.getElementsByClassName('form-check-input')[0].value) !== -1){
            document.getElementById('baner').innerHTML = `<div class='alert alert-success'><p>Poprawny tag</p></div>`
        }else{
            document.getElementById('baner').innerHTML = `<div class='alert alert-danger'><p>Zly tag</p></div>`
        }
    })
})()