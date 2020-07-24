<?php
    session_start();
/*
if($_SESSION['usuario']!= 'root1'){

session_destroy();
	header("Location: http://18.216.97.211/login.php?sn=1");
}
	*/
        $user="root";
        $pass="administrador";
        $db="database";
        $conexion=new mysqli("localhost",$user,$pass,$db);
        
?>