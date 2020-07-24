<?php
session_start();

if(!isset($_SESSION['usuario'])){
		
		header("Location: http://18.216.97.211/login.php");
echo "No autorizado";
}{

//print_r($_SESSION['usuario']);
}
?>