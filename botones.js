function botonAprendices(){
	location.href="Aprendices.html"
}
function botonInicio(){
	location.href="inicio.html"
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