<?php
session_start();

if(!isset($_SESSION['usuario'])){
		
		header("Location: http://localhost/ciclatAppWebManager/html/login.php");
echo "No autorizado";
}{

//print_r($_SESSION['usuario']);
}
?>