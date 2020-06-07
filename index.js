(function(){
    document.getElementsByTagName('form')[0].reset();
    document.getElementsByClassName('form-control')[0].addEventListener('blur', e => {
        e.target.value === "" ? (
            document.getElementsByClassName('btn-success')[0].setAttribute('disabled', ""),
            e.target.classList.add('is-invalid'),
            e.target.classList.contains('is-valid') ? e.target.classList.remove('is-valid') : false
            ) : (
            document.getElementsByClassName('btn-success')[0].removeAttribute('disabled'),
            e.target.classList.add('is-valid'),
            e.target.classList.contains('is-invalid') ? e.target.classList.remove('is-invalid') : false
        );
    })
})()