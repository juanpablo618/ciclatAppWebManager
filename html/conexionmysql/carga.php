<?php
session_start();
	//session_start();
	//include 'login-user.php';
	//include 'conexionmysql/sesiones.php';	
$varses1 = $_SESSION['usuario'];
//echo $varses1;
if($varses1== null|| $varses1=''){
	header("Location: http://localhost/ciclatAppWebManager/html/login.php");
	echo "NO";
	die();
}
?>


<?php
$servername = "localhost";
$username = "root";
$password = "administrador";
$dbname = "ultimavers_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


    $id= $_POST['ID'];
    $imei= $_POST['IMEI'];
    $Marca= $_POST['Marca'];
    $Modelo= $_POST['Modelo'];
    $Fecha= $_POST['Fecha'];
    $Revisor= $_POST['Revisor'];
    $GB= $_POST['GB'];
    $Color= $_POST['Color'];
    $Estetica= $_POST['Estetica'];
    $Carcasa= $_POST['Carcasa'];
    $CamaraTrasera= $_POST['CamaraTrasera'];
    $CamaraDelantera= $_POST['CamaraDelantera'];
    $PinCarga= $_POST['PinCarga'];
    $Auriculares= $_POST['Auriculares'];
    $ParlanteFrontal= $_POST['ParlanteFrontal'];
    $ParlanteTrasero= $_POST['ParlanteTrasero'];
    $SensorProx= $_POST['SensorProx'];
    $Bateria= $_POST['Bateria'];
    $BateriaPorcentaje= $_POST['BateriaPorcentaje'];
    $Wifi= $_POST['Wifi'];
    $Bluetooth= $_POST['Bluetooth'];
    $Vidrio= $_POST['Vidrio'];
    $Modulo= $_POST['Modulo'];
    $Traslucido= $_POST['Traslucido'];
    $Otros= $_POST['Otros'];
    $Estado= $_POST['Estado'];
    $Lugar= $_POST['Lugar'];
    $Liberar= $_POST['Liberar'];
    $PortaSim= $_POST['PortaSim'];
    $Microfono= $_POST['Microfono'];
    $Botones= $_POST['Botones'];
    $Tactil= $_POST['Tactil'];
    $version= $_POST['Version'];

if($imei==""){
die();
}


if($Botones==""){
	$Botones="X";
}
if($PortaSim==""){
	$PortaSim="X";
}
if($Bluetooth==""){
	$Bluetooth="X";
}
if($Wifi==""){
	$Wifi="X";
}
if($Bateria==""){
	$Bateria="X";
}
if($SensorProx==""){
	$SensorProx="X";
}
if($ParlanteTrasero==""){
	$ParlanteTrasero="X";
}
if($ParlanteFrontal==""){
	$ParlanteFrontal="X";
}
if($Auriculares==""){
	$Auriculares="X";
}

if($PinCarga==""){
	$PinCarga="X";
}

if($CamaraDelantera==""){
	$CamaraDelantera="X";
}

if($CamaraTrasera==""){
	$CamaraTrasera="X";
}

if($Carcasa==""){
	$Carcasa="X";
}


if($Tactil==""){
	$Tactil="X";
}

if($Microfono==""){
	$Microfono="X";
}


if($Liberar==""){
	$Liberar="X";
}

$sql = "INSERT INTO CELULAR(`ID`, `IMEI`, `Marca`, `Modelo`, `Fecha`, `Revisor`, `GB`, `Color`, `Estetica`, `Carcasa`, `CamaraTrasera`, `CamaraDelantera`, `PinCarga`, `Auriculares`, `ParlanteFrontal`, `ParlanteTrasero`, `SensorProx`, `Bateria`, `BateriaPorcentaje`, `Wifi`, `Bluetooth`, `Vidrio`, `Modulo`, `Traslucido`, `Otros`, `Estado`, `Lugar`, `Liberar`, `PortaSim`, `Microfono`, `Botones`, `Tactil`, `version`) VALUES('$id','$imei','$Marca','$Modelo','$Fecha','$Revisor','$GB','$Color','$Estetica','$Carcasa','$CamaraTrasera','$CamaraDelantera','$PinCarga','$Auriculares','$ParlanteFrontal','$ParlanteTrasero','$SensorProx','$Bateria','$BateriaPorcentaje','$Wifi','$Bluetooth','$Vidrio','$Modulo','$Traslucido','$Otros','$Estado','$Lugar','$Liberar','$PortaSim','$Microfono','$Botones','$Tactil','$version')";

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

	$conn1 = new mysqli('localhost','root','administrador','database');

if ($conn1->query($sql) === TRUE) {
    header('Location: http://localhost/ciclatAppWebManager/html/tables2.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}
$conn1->close();

?>

