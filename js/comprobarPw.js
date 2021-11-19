function comprobarClave(){
    clave1 = document.formulario.passw.value
    clave2 = document.formulario.passw2.value

    if (clave1 == clave2)
        document.formulario.submit()
    else
       alert("Verifique su contraseña, no coincide")
       event.preventDefault();
}