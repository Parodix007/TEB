(function(){
    document.getElementsByTagName('form')[0].reset();
    document.getElementsByClassName('valid-feedback')[0].innerHTML = ''
    document.getElementsByClassName('invalid-feedback')[0].innerHTML = ''

    document.getElementsByClassName('form-control')[0].addEventListener('blur', e => {
        const dane = new Array()
        const xml = new XMLHttpRequest()
        xml.open("POST", "uprawnieni.php", true)
        xml.send()
        xml.onload = () => {
            dane.push(...JSON.parse(xml.response))

            const valid = dane.filter( ( { id_uprawnionego } ) => id_uprawnionego.toString() === e.target.value.toString() )

            valid.length === 1 ? (
                    document.getElementsByClassName('btn-success')[0].removeAttribute('disabled'),
                    e.target.classList.add('is-valid'),
                    e.target.classList.contains('is-invalid') ? e.target.classList.remove('is-invalid') : false,
                    document.getElementsByClassName('valid-feedback')[0].innerHTML = 'Poprawne ID'
                ) : (
                    document.getElementsByClassName('btn-success')[0].setAttribute('disabled', ""),
                    e.target.classList.add('is-invalid'),
                    e.target.classList.contains('is-valid') ? e.target.classList.remove('is-valid') : false,
                    document.getElementsByClassName('invalid-feedback')[0].innerHTML = 'Wpisz poprawne ID'
                )
        }
    })
})()
