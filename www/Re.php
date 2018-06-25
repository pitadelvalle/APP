<?php


    include 'conexion.php';
    //conexion con la base de datos y el servidor
    $nombres = $_POST['inputNombre'];
    $email = $_POST['inputemail'];
    $pass = $_POST['passw'];
    $rpass = $_POST['pass2'];

    $inser = ("INSERT INTO test (nombre,correo,contraseña,contraseña2) VALUES('$nombres',
    '$email','$pass','$rpass')") ;
    $resul = mysql_query($conn,$inser);
    if(!$resul){
        echo 'error de registro';
    }
    else{
        echo 'registro exitoso';
    }

    //Obtiene la longitus de un string
	$req = (strlen($nombres)*strlen($email)*strlen($pass)*strlen($rpass)) or die("No se han llenado todos los campos");

	//se confirma la contraseña
	if ($pass != $rpass) {
		die('Las contraseñas no coinciden, Verifique <br /> <a href="Registro.html">Volver</a>');
	}

	//se encripta la contraseña
	$contraseñaUser = md5($pass);

	//ingresamos la informacion a la base de datos
	
			
      
?>