<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$Marca = (isset($_POST['Marca'])) ? $_POST['Marca'] : '';
$Modelo = (isset($_POST['Modelo'])) ? $_POST['Modelo'] : '';
$Descripcion = (isset($_POST['Descripcion'])) ? $_POST['Descripcion'] : '';
$Repuesto = (isset($_POST['Repuesto'])) ? $_POST['Repuesto'] : '';
$Cantidad = (isset($_POST['Cantidad'])) ? $_POST['Cantidad'] : '';


$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

ini_set('display_errors', 1);



switch($opcion){
    case 1:
//Eliminar un Registro de Tabla 3 - Listo

        $consulta = "INSERT INTO `Tareas`(`Marca`, `Modelo`, `Repuesto`, `Cantidad`, `Descripcion`) VALUES ('$Marca','$Modelo','$Repuesto','$Cantidad','$Descripcion')";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();

		$consulta = "SELECT * FROM Tareas";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;    
    case 2:       
		
        break;
    case 3:       
		   //Eliminar un Registro de Tabla 3 - Listo
        $consulta = "DELETE FROM `Tareas` WHERE Marca='$Marca' AND Modelo='$Modelo' AND Repuesto='$Repuesto' AND Cantidad='$Cantidad'";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();

		$consulta = "SELECT * FROM Tareas";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);                   
        break;
    case 4:    
		
		
		break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;