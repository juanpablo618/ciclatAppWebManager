<?php
session_start();
	//session_start();
	//include 'login-user.php';
	//include 'conexionmysql/sesiones.php';	
$varses1=$_SESSION['usuario'];

if($varses1==null|| $varses1=''){
	header("Location: http://localhost/ciclatAppWebManager/html/login.php");
	echo "NO";
	die();
}

$servername = "localhost";
$username = "root";
$password = "administrador";
$dbname = "database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$varses1=$_SESSION['usuario'];

//
$tarea=$_POST['tarea'];

$sql = "INSERT INTO `Tareas`(`Tarea`, `Nombre`) VALUES ('$tarea','$varses1')";


if ($conn->query($sql) === TRUE) {
    header('Location: http://localhost/ciclatAppWebManager/html/tables.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>