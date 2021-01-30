function login(){
	let correo = document.formulario.correo.value
	let pw = document.formulario.psw.value
	let user1 = {
		correo,
		pw
	}
	console.log(user1)

	if (user1.correo == "cjlopez60@misena.edu.co" && user1.pw == "1234") {
		window.open("inicio.html", "home", "width=900, height=500")
		
	}
	else{
		alert("Informacion incorrecta \nPor favor verifique sus datos")
		
	}
}

function recuperar(){
    alert("Escribele al administrador a: sinovaadmin@misena.edu.co")
}