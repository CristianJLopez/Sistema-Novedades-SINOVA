function botonAprendices(){
	location.href="Aprendices.html"
}
function botonInicio(){
	location.href="inicio.html"
}
function botonCancelarCrearUsuario(){
	location.href="AreaAdministrativa.html"
}
function terminaNovedad(){
	
	if (window.confirm("Confirma subir la novedad?")) {
		alert("Novedad subida con exito!\nID novedad: 11107")
		window.open("inicio.html");
	  }
}
function descargar(){
	alert("Contenido descargado con exito")
	location.href="inicio.html"
}
function terminaCrearUsuario(){
	
	if (window.confirm("Confirma crear el usuario?")) {
		alert("Usuario creado correctamente!\nID transaccion: 11107")
		location.href="AreaAdministrativa.html"
	  }
}


