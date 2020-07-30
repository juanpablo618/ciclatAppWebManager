<?php

		$user="root";
        $pass="";
        $db="database";
        $conexion=new mysqli("localhost",$user,$pass,$db);

$user1=$_POST['usuario'];
$pass1=$_POST['pass'];
$pass2=$_POST['pass-2'];



if ($conexion->connect_error) {
                        die("Connection failed: " . $conexion->connect_error);
                    }


if($pass1==$pass2){
	
	$query="INSERT INTO UsuariosNuevos(`usuario`, `pass`) VALUES ('$user1','$pass1')";
                        $resultado=$conexion->query($query);
                  
                  if ($resultado->connect_error) {
                  echo no;
                        die("Connection failed: " . $resultado->error);
                    }
			header('Location: http://localhost/ciclatAppWebManager/html/');
}else{
  	
	echo 'Las contraseñas no coinciden, vuelva a llenar el formulario';
	//header('Location: http://localhost/ciclatAppWebManager/html/404.html');
}

?>

<html>

<body>
<button onclick="location.href='http://localhost/ciclatAppWebManager/html/'">Llévame a otro lado</button>
</body>

</html>