<?php
session_start();
	//session_start();
	//include 'login-user.php';
	//include 'conexionmysql/sesiones.php';	
$varses1=$_SESSION['usuario'];

if($varses1==null|| $varses1=''){
	header("Location: http://18.216.97.211/login.php");
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
$tarea=$_REQUEST['tarea1'];

$sql = "DELETE FROM `Tareas` WHERE tarea='$tarea' AND nombre='$varses1' ";


if ($conn->query($sql) === TRUE) {

    header('Location: http://18.216.97.211/tables.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>