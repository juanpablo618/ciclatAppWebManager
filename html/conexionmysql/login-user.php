<?php


$user1=$_REQUEST['usuario'];
$pass1=$_REQUEST['pass'];

//echo $user1;
//echo $pass1;

		$user="root";
        $pass="administrador";
        $db="database";
        $conexion=new mysqli("localhost",$user,$pass,$db);
$resultado = $conexion->query("SELECT * FROM Usuarios WHERE usuario='$user1' AND pass='$pass1'"); 

//          $Avatar1 = $conexion->query("SELECT Avatar FROM Usuarios WHERE usuario='$user1'");


    /* determinar el numero de filas del resultado */
    $filas = $resultado->num_rows;


//echo $filas;
if ($conexion->connect_error) {
                        die("Connection failed: " . $conexion->connect_error);
                    }

if ($resultado->connect_error) {
                        die("Connection failed: " . $resultado->error);
                    }


if($filas>0){
		
		session_start();

						$query ="SELECT Avatar FROM Usuarios WHERE usuario='$user1'";

                        $resultado=$conexion->query($query);
                        while($row=$resultado->fetch_assoc()){
						$_SESSION['Avatar']= $row['Avatar'];
                        }		

		$_SESSION['usuario']=$user1;
		//$_SESSION['Avatar']=$Avatar;
		$varses = $_SESSION['usuario'];
		//$varses2 =$_SESSION['Avatar'];
		echo $varses;
		//echo "ok";
		header("Location: http://18.216.97.211/index.php");
}else{
//echo $filas;
		header("Location: http://18.216.97.211/login.php?sn=1");
		//echo "error";
		
}

mysqli_free_result($resultado);

mysqli_close($conexion);


?>









