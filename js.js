(function(){

    document.getElementsByClassName('form-control')[0].value = ''

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

    let tag = dane[Math.round(Math.random() * (dane.length-1))]

    document.getElementById('tag').innerHTML = `Twój Tag: ${tag}`

    document.getElementsByClassName('form-control')[0].addEventListener('blur', (e) => {

        if(e.target.value === tag){
            document.getElementById('baner').innerHTML = `<p class='alert alert-success'>Prawidłowy Tag</p>`
        }else if(e.target.value !== tag){
            document.getElementById('baner').innerHTML = `<p class='alert alert-danger'>Zły Tag</p>`
        }

    })
})()