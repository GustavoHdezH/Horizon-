(function(){

    var  formulario = document.getElementById('form'),
        elementos = formulario.elemts,
        boton = document.getElementById('submit');

    var validarNombre = function(e){
        if (formulario.username.value == 0) {
            Swal.fire('Algo salio mal',
            'Escribe de nuevo tu usuario',
            'warning')
            e.preventDefault();
        }
    };
    var validarPasswd = function(e){
        if(formulario.passwd.value == 0){
            Swal.fire('Algo salio mal',
            'Escribe de nuevo tu clave',
            'warning')
            e.preventDefault();
        }
    };
    var validar = function(e){
        validarNombre(e);
        validarPasswd(e);
    };
    formulario.addEventListener("submit",validar);
}())
