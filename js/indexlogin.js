/*function login(){ //COMPRUEBA CORREOS INTEGRANTES GRUPO
	let correo = document.formulario.correo.value
	let pw = document.formulario.psw.value
	let user1 = {
		correo,
		pw
	}
	console.log(user1)

	if (user1.correo == "cjlopez60@misena.edu.co" && user1.pw == "1234" || user1.correo == "jaromero374@misena.edu.co" && user1.pw == "1234"
		|| user1.correo == "jframirez78@misena.edu.co" && user1.pw == "1234" || user1.correo == "yandre1@misena.edu.co" && user1.pw == "1234"
		|| user1.correo == "icruiz73@misena.edu.co" && user1.pw == "1234")  {
		location.href="inicio.html"	
	}
	else if (user1.correo == "superadmin@misena.edu.co" && user1.pw == "0000") {
		location.href="AreaAdministrativa.html"
		
	}else{
		alert("Informacion incorrecta \nPor favor verifique sus datos")
	}
}
function login(){
	let correo = document.formularioo.correoo.value
	let expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/
	if ( !expr.test(correo) ){    //COMPRUEBA QUE SEA TIPO EMAIL
		alert("Error: La dirección de correo " + correo + " es incorrecta.");
		return false;
	}
}*/
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

function recuperar(){ // RECUPERAR CONTRASEÑA
	let correo = document.formularioo.correoo.value
	let identificacion = document.formularioo.identificacion.value 
	let expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/

	console.log(correo)
	if (correo == "" || identificacion == "") {  //COMPRUEBA CAMPOS VACIOS
		alert("Los campos no pueden quedar vacios");
		return false;
	}
	if ( !expr.test(correo) ){    //COMPRUEBA QUE SEA TIPO EMAIL
		alert("Error: La dirección de correo " + correo + " es incorrecta.");
		return false;
	}
	else{
		alert("Sus nuevas credenciales se enviaron exitosamente, por favor revise su email");
		window.location="../index.php";
	}
}
 function alerta(){
	swal("Hello world!");
 }