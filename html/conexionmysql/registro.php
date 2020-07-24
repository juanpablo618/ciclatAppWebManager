<?php

		$user="root";
        $pass="administrador";
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
			header('Location: http://18.216.97.211/');
}else{
  	
	echo 'Las contraseñas no coinciden, vuelva a llenar el formulario';
	//header('Location: http://18.216.97.211/404.html');
}

?>

<html>

<body>
<button onclick="location.href='http://18.216.97.211/'">Llévame a otro lado</button>
</body>

</html>