<?php
include 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$Marca = (isset($_POST['Marca'])) ? $_POST['Marca'] : '';
$Modelo = (isset($_POST['Modelo'])) ? $_POST['Modelo'] : '';
$id = (isset($_POST['ID'])) ? $_POST['ID'] : '';
$imei = (isset($_POST['IMEI'])) ? $_POST['IMEI'] : '';
$Fecha = (isset($_POST['Fecha'])) ? $_POST['Fecha'] : '';
$Estado = (isset($_POST['Estado'])) ? $_POST['Estado'] : '';
$Revisor = (isset($_POST['Revisor'])) ? $_POST['Revisor'] : '';
$GB = (isset($_POST['GB'])) ? $_POST['GB'] : '';
$Color = (isset($_POST['Color'])) ? $_POST['Color'] : '';
$Estetica = (isset($_POST['Estetica'])) ? $_POST['Estetica'] : '';
$Carcasa = (isset($_POST['Carcasa'])) ? $_POST['Carcasa'] : '';
$CamaraTrasera = (isset($_POST['CamaraTrasera'])) ? $_POST['CamaraTrasera'] : '';
$CamaraDelantera = (isset($_POST['CamaraDelantera'])) ? $_POST['CamaraDelantera'] : '';
$PinCarga = (isset($_POST['PinCarga'])) ? $_POST['PinCarga'] : '';
$Auriculares = (isset($_POST['Auriculares'])) ? $_POST['Auriculares'] : '';
$ParlanteFrontal = (isset($_POST['ParlanteFrontal'])) ? $_POST['ParlanteFrontal'] : '';
$ParlanteTrasero = (isset($_POST['ParlanteTrasero'])) ? $_POST['ParlanteTrasero'] : '';
$SensorProx = (isset($_POST['SensorProx'])) ? $_POST['SensorProx'] : '';
$Bateria = (isset($_POST['Bateria'])) ? $_POST['Bateria'] : '';
$BateriaPorcentaje = (isset($_POST['BateriaPorcentaje'])) ? $_POST['BateriaPorcentaje'] : '';
$Wifi = (isset($_POST['Wifi'])) ? $_POST['Wifi'] : '';
$Bluetooth = (isset($_POST['Bluetooth'])) ? $_POST['Bluetooth'] : '';
$Vidrio = (isset($_POST['Vidrio'])) ? $_POST['Vidrio'] : '';
$Modulo = (isset($_POST['Modulo'])) ? $_POST['Modulo'] : '';
$Traslucido = (isset($_POST['Traslucido'])) ? $_POST['Traslucido'] : '';
$Otros = (isset($_POST['Otros'])) ? $_POST['Otros'] : '';
$Liberar = (isset($_POST['Liberar'])) ? $_POST['Liberar'] : '';
$PortaSim = (isset($_POST['PortaSim'])) ? $_POST['PortaSim'] : '';
$Microfono = (isset($_POST['Microfono'])) ? $_POST['Microfono'] : '';
$Botones = (isset($_POST['Botones'])) ? $_POST['Botones'] : '';
$Tactil = (isset($_POST['Tactil'])) ? $_POST['Tactil'] : '';
$version = (isset($_POST['version'])) ? $_POST['version'] : '';




$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

ini_set('display_errors', 1);



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

switch($opcion){
    case 1:
	//Agegar nuevo Registro Manualmente
		$consulta = "INSERT INTO CELULAR(`ID`,`IMEI`, `Marca`, `Modelo`, `Fecha`, `Revisor`, `GB`, `Color`, `Estetica`, `Carcasa`, `CamaraTrasera`, `CamaraDelantera`, `PinCarga`, `Auriculares`, `ParlanteFrontal`, `ParlanteTrasero`, `SensorProx`, `Bateria`, `BateriaPorcentaje`, `Wifi`, `Bluetooth`, `Vidrio`, `Modulo`, `Traslucido`, `Otros`, `Estado`, `Lugar`, `Liberar`, `PortaSim`, `Microfono`, `Botones`, `Tactil`, `version`) VALUES('$id','$imei','$Marca','$Modelo','$Fecha','$Revisor','$GB','$Color','$Estetica','$Carcasa','$CamaraTrasera','$CamaraDelantera','$PinCarga','$Auriculares','$ParlanteFrontal','$ParlanteTrasero','$SensorProx','$Bateria','$BateriaPorcentaje','$Wifi','$Bluetooth','$Vidrio','$Modulo','$Traslucido','$Otros','$Estado','$Lugar','$Liberar','$PortaSim','$Microfono','$Botones','$Tactil','$version')";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
		
		$sql = "INSERT INTO CELULAR(`ID`, `IMEI`, `Marca`, `Modelo`, `Fecha`, `Revisor`, `GB`, `Color`, `Estetica`, `Carcasa`, `CamaraTrasera`, `CamaraDelantera`, `PinCarga`, `Auriculares`, `ParlanteFrontal`, `ParlanteTrasero`, `SensorProx`, `Bateria`, `BateriaPorcentaje`, `Wifi`, `Bluetooth`, `Vidrio`, `Modulo`, `Traslucido`, `Otros`, `Estado`, `Lugar`, `Liberar`, `PortaSim`, `Microfono`, `Botones`, `Tactil`, `version`) VALUES('$id','$imei','$Marca','$Modelo','$Fecha','$Revisor','$GB','$Color','$Estetica','$Carcasa','$CamaraTrasera','$CamaraDelantera','$PinCarga','$Auriculares','$ParlanteFrontal','$ParlanteTrasero','$SensorProx','$Bateria','$BateriaPorcentaje','$Wifi','$Bluetooth','$Vidrio','$Modulo','$Traslucido','$Otros','$Estado','$Lugar','$Liberar','$PortaSim','$Microfono','$Botones','$Tactil','$version')";

	$conn1 = new mysqli('localhost','root','administrador','database');

if ($conn1->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}
$conn1->close();

		$consulta = "SELECT * FROM CELULAR";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;    
    case 2:       
		//Editar Registro
		$version2=--$version;
		++$version;
		$consulta = "UPDATE `CELULAR` SET IMEI='$imei',Marca='$Marca',Modelo='$Modelo',Fecha='$Fecha',Revisor='$Revisor',GB='$GB',Color='$Color',Estetica='$Estetica',Carcasa='$Carcasa',CamaraTrasera='$CamaraTrasera',CamaraDelantera='$CamaraDelantera',PinCarga='$PinCarga',Auriculares='$Auriculares',ParlanteFrontal='$ParlanteFrontal',ParlanteTrasero='$ParlanteTrasero',SensorProx='$SensorProx',Bateria='$Bateria',BateriaPorcentaje='$BateriaPorcentaje',Wifi='$Wifi',Bluetooth='$Bluetooth',Vidrio='$Vidrio',Modulo='$Modulo',Traslucido='$Traslucido',Otros='$Otros',Estado='$Estado',Lugar='$Lugar',Liberar='$Liberar',PortaSim='$PortaSim',Microfono='$Microfono',Botones='$Botones',Tactil='$Tactil',version='$version' WHERE id='$id' AND imei='$imei' AND version='$version2'";
		$resultado = $conexion->prepare($consulta);
        $resultado->execute();
		
		$conn1 = new mysqli('localhost','root','administrador','database');

$sql1 = "INSERT INTO CELULAR(`ID`, `IMEI`, `Marca`, `Modelo`, `Fecha`, `Revisor`, `GB`, `Color`, `Estetica`, `Carcasa`, `CamaraTrasera`, `CamaraDelantera`, `PinCarga`, `Auriculares`, `ParlanteFrontal`, `ParlanteTrasero`, `SensorProx`, `Bateria`, `BateriaPorcentaje`, `Wifi`, `Bluetooth`, `Vidrio`, `Modulo`, `Traslucido`, `Otros`, `Estado`, `Lugar`, `Liberar`, `PortaSim`, `Microfono`, `Botones`, `Tactil`, `version`) VALUES('$id','$imei','$Marca','$Modelo','$Fecha','$Revisor','$GB','$Color','$Estetica','$Carcasa','$CamaraTrasera','$CamaraDelantera','$PinCarga','$Auriculares','$ParlanteFrontal','$ParlanteTrasero','$SensorProx','$Bateria','$BateriaPorcentaje','$Wifi','$Bluetooth','$Vidrio','$Modulo','$Traslucido','$Otros','$Estado','$Lugar','$Liberar','$PortaSim','$Microfono','$Botones','$Tactil','$version')";


if ($conn1->query($sql1) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn1->close();

		$consulta = "SELECT * FROM CELULAR";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:       
		   //Eliminar un Registro de Tabla Registros - Listo
		$consulta = "DELETE FROM CELULAR WHERE IMEI='$imei'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
		
		$conn1 = new mysqli('localhost','root','administrador','database');

	$sql4 = "DELETE FROM CELULAR WHERE imei='$imei' ";
    
    if ($conn1->query($sql4) === TRUE) {
                    } else {
                            echo "Error: " . $sql4 . "<br>" . $conn1->error;

                    }
	$conn1->close();

		$consulta = "SELECT * FROM CELULAR";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);

		
        break;
    case 4:    
	//Mostrar Todos
		$consulta = "SELECT * FROM CELULAR";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
		
		break;
	case 5:
	//Marcar Vendido
		$version2=--$version;
		++$version;
		$consulta = "UPDATE `CELULAR` SET IMEI='$imei',Marca='$Marca',Modelo='$Modelo',Fecha='$Fecha',Revisor='$Revisor',GB='$GB',Color='$Color',Estetica='$Estetica',Carcasa='$Carcasa',CamaraTrasera='$CamaraTrasera',CamaraDelantera='$CamaraDelantera',PinCarga='$PinCarga',Auriculares='$Auriculares',ParlanteFrontal='$ParlanteFrontal',ParlanteTrasero='$ParlanteTrasero',SensorProx='$SensorProx',Bateria='$Bateria',BateriaPorcentaje='$BateriaPorcentaje',Wifi='$Wifi',Bluetooth='$Bluetooth',Vidrio='$Vidrio',Modulo='$Modulo',Traslucido='$Traslucido',Otros='$Otros',Estado='Vendido',Lugar='$Lugar',Liberar='$Liberar',PortaSim='$PortaSim',Microfono='$Microfono',Botones='$Botones',Tactil='$Tactil',version='$version' WHERE id='$id' AND imei='$imei' AND version='$version2'";
		$resultado = $conexion->prepare($consulta);
        $resultado->execute();
		
		$conn1 = new mysqli('localhost','root','administrador','database');

		$sql1 = "INSERT INTO CELULAR(`ID`, `IMEI`, `Marca`, `Modelo`, `Fecha`, `Revisor`, `GB`, `Color`, `Estetica`, `Carcasa`, `CamaraTrasera`, `CamaraDelantera`, `PinCarga`, `Auriculares`, `ParlanteFrontal`, `ParlanteTrasero`, `SensorProx`, `Bateria`, `BateriaPorcentaje`, `Wifi`, `Bluetooth`, `Vidrio`, `Modulo`, `Traslucido`, `Otros`, `Estado`, `Lugar`, `Liberar`, `PortaSim`, `Microfono`, `Botones`, `Tactil`, `version`) VALUES('$id','$imei','$Marca','$Modelo','$Fecha','$Revisor','$GB','$Color','$Estetica','$Carcasa','$CamaraTrasera','$CamaraDelantera','$PinCarga','$Auriculares','$ParlanteFrontal','$ParlanteTrasero','$SensorProx','$Bateria','$BateriaPorcentaje','$Wifi','$Bluetooth','$Vidrio','$Modulo','$Traslucido','$Otros','Vendido','$Lugar','$Liberar','$PortaSim','$Microfono','$Botones','$Tactil','$version')";


		if ($conn1->query($sql1) === TRUE) {
		} else {
  		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn1->close();

		$consulta = "SELECT * FROM CELULAR";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
	break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;