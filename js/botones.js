function botonAprendices(){
	location.href="Aprendices.php"
}
function botonInicio(){
	location.href="../views/inicio.php"
}
function botonCancelarCrearUsuario(){
	location.href="AreaAdministrativa.php"
}
function terminaNovedad(){
	
	if (window.confirm("Confirma subir la novedad?")) {
		alert("Novedad subida con exito!\nID novedad: 11107")
		location.href="../views/inicio.php"
	  }
}
function descargar(){
	alert("Contenido descargado con exito")
	location.href="inicio.php"
}
function terminaCrearUsuario(){
	
	if (window.confirm("Confirma crear el usuario?")) {
		alert("Usuario creado correctamente!\nID transaccion: 11107")
		location.href="AreaAdministrativa.php"
	  }
}


