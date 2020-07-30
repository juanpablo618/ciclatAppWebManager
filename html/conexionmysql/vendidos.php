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
$dbname="ultimavers_db";
$dbname2="database";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


    $idmod= $_REQUEST['idmod'];
    $imeimod= $_REQUEST['imeimod'];
    $versionmod= $_REQUEST['versionmod'];

$query="SELECT * FROM CELULAR WHERE id='$idmod'";
                        $resultado=$conn->query($query);
                        $row=$resultado->fetch_assoc();


    $id= $row['ID'];
    $imei= $row['IMEI'];
    $Marca= $row['Marca'];
    $Modelo= $row['Modelo'];
    $Fecha= $row['Fecha'];
    $Revisor= $row['Revisor'];
    $GB= $row['GB'];
    $Color= $row['Color'];
    $Estetica= $row['Estetica'];
    $Carcasa= $row['Carcasa'];
    $CamaraTrasera= $row['CamaraTrasera'];
    $CamaraDelantera= $row['CamaraDelantera'];
    $PinCarga= $row['PinCarga'];
    $Auriculares= $row['Auriculares'];
    $ParlanteFrontal= $row['ParlanteFrontal'];
    $ParlanteTrasero= $row['ParlanteTrasero'];
    $SensorProx= $row['SensorProx'];
    $Bateria= $row['Bateria'];
    $BateriaPorcentaje= $row['BateriaPorcentaje'];
    $Wifi= $row['Wifi'];
    $Bluetooth= $row['Bluetooth'];
    $Vidrio= $row['Vidrio'];
    $Modulo= $row['Modulo'];
    $Traslucido= $row['Traslucido'];
    $Otros= $row['Otros'];
    $Estado= $row['Estado'];
    $Lugar= $row['Lugar'];
    $Liberar= $row['Liberar'];
    $PortaSim= $row['PortaSim'];
    $Microfono= $row['Microfono'];
    $Botones= $row['Botones'];
    $Tactil= $row['Tactil'];
    $version= $row['version'];
   

$Estado1="Vendido";

$version+=1;

echo $version;

$date = date("Y-m-d");

$sql = "UPDATE CELULAR SET ID='$id',IMEI='$imei',Marca='$Marca',Modelo='$Modelo',Fecha='$date',Revisor='$Revisor',GB='$GB',Color='$Color',Estetica='$Estetica',Carcasa='$Carcasa',CamaraTrasera='$CamaraTrasera',CamaraDelantera='$CamaraDelantera',PinCarga='$PinCarga',Auriculares='$Auriculares',ParlanteFrontal='$ParlanteFrontal',ParlanteTrasero='$ParlanteTrasero',SensorProx='$SensorProx',Bateria='$Bateria',BateriaPorcentaje='$BateriaPorcentaje',Wifi='$Wifi',Bluetooth='$Bluetooth',Vidrio='$Vidrio',Modulo='$Modulo',Traslucido='$Traslucido',Otros='$Otros',Estado='$Estado1',Lugar='$Lugar',Liberar='$Liberar',PortaSim='$PortaSim',Microfono='$Microfono',Botones='$Botones',Tactil='$Tactil',version='$version' WHERE id='$idmod' AND imei='$imeimod' AND version='$versionmod'";


$sql1="INSERT INTO VENTAS(`ID`, `IMEI`, `Marca`, `Modelo`, `Fecha`, `Revisor`, `GB`, `Color`, `Estetica`, `Carcasa`, `CamaraTrasera`, `CamaraDelantera`, `PinCarga`, `Auriculares`, `ParlanteFrontal`, `ParlanteTrasero`, `SensorProx`, `Bateria`, `BateriaPorcentaje`, `Wifi`, `Bluetooth`, `Vidrio`, `Modulo`, `Traslucido`, `Otros`, `Estado`, `Lugar`, `Liberar`, `PortaSim`, `Microfono`, `Botones`, `Tactil`, `version`) VALUES('$id','$imei','$Marca','$Modelo','$date','$Revisor','$GB','$Color','$Estetica','$Carcasa','$CamaraTrasera','$CamaraDelantera','$PinCarga','$Auriculares','$ParlanteFrontal','$ParlanteTrasero','$SensorProx','$Bateria','$BateriaPorcentaje','$Wifi','$Bluetooth','$Vidrio','$Modulo','$Traslucido','$Otros','$Estado1','$Lugar','$Liberar','$PortaSim','$Microfono','$Botones','$Tactil','$version')";



if ($conn->query($sql1) === TRUE) {
   // header('Location: http://localhost/ciclatAppWebManager/html/tables2.php');
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}


if ($conn->query($sql) === TRUE) {
echo ok;
   header('Location: http://localhost/ciclatAppWebManager/html/tables2.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

$conn1 = new mysqli($servername, $username, $password, $dbname2);


$sql2="INSERT INTO CELULAR(`ID`, `IMEI`, `Marca`, `Modelo`, `Fecha`, `Revisor`, `GB`, `Color`, `Estetica`, `Carcasa`, `CamaraTrasera`, `CamaraDelantera`, `PinCarga`, `Auriculares`, `ParlanteFrontal`, `ParlanteTrasero`, `SensorProx`, `Bateria`, `BateriaPorcentaje`, `Wifi`, `Bluetooth`, `Vidrio`, `Modulo`, `Traslucido`, `Otros`, `Estado`, `Lugar`, `Liberar`, `PortaSim`, `Microfono`, `Botones`, `Tactil`, `version`) VALUES('$id','$imei','$Marca','$Modelo','$Fecha','$Revisor','$GB','$Color','$Estetica','$Carcasa','$CamaraTrasera','$CamaraDelantera','$PinCarga','$Auriculares','$ParlanteFrontal','$ParlanteTrasero','$SensorProx','$Bateria','$BateriaPorcentaje','$Wifi','$Bluetooth','$Vidrio','$Modulo','$Traslucido','$Otros','$Estado1','$Lugar','$Liberar','$PortaSim','$Microfono','$Botones','$Tactil','$version')";


if ($conn1->query($sql2) === TRUE) {
   // header('Location: http://localhost/ciclatAppWebManager/html/tables2.php');
} else {
    echo "Error: " . $sql2 . "<br>" . $conn1->error;
}


?>

