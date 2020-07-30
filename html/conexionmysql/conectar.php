<?php
    session_start();
/*
if($_SESSION['usuario']!= 'root1'){

session_destroy();
	header("Location: http://localhost/ciclatAppWebManager/html/login.php?sn=1");
}
	*/
        $user="root";
        $pass="";
        $db="ultimavers_db";
        $conexion=new mysqli("localhost",$user,$pass,$db);

        
?>