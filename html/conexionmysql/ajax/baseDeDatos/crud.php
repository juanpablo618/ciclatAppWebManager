<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$Marca = (isset($_POST['Marca'])) ? $_POST['Marca'] : '';
$Modelo = (isset($_POST['Modelo'])) ? $_POST['Modelo'] : '';

$IMEI = (isset($_POST['IMEI'])) ? $_POST['IMEI'] : '';
$Riesgo = (isset($_POST['Riesgo'])) ? $_POST['Riesgo'] : '';
$Tiempo = (isset($_POST['Tiempo'])) ? $_POST['Tiempo'] : '';
$Descripcion = (isset($_POST['Descripcion'])) ? $_POST['Descripcion'] : '';
$Revisor = (isset($_POST['Revisor'])) ? $_POST['Revisor'] : '';


$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';


switch($opcion){
    case 1:
        //Eliminar un Registro de Tabla 3 - Listo
        $consulta = "DELETE FROM Tabla3 WHERE IMEI='$IMEI' AND Tiempo='$Tiempo' AND Riesgo='$Riesgo' AND Revisor='$Revisor'";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        break;    
    case 2:       
		//Actualizar tablas para Matchear
		$consulta = "DELETE FROM Tabla1";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
		
        $consulta = "INSERT INTO Tabla1 (Marca, Modelo) VALUES('$Marca', '$Modelo') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        $consulta = "SELECT * FROM Tabla1";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);

		passthru('python3 /var/www/html/conexionmysql/ajax/baseDeDatos/matcheos_pagina.py');

        break;
    case 3:       
		//Asignar Tareas de matcheo a Revisores
        $consulta = "INSERT INTO Tabla3 (IMEI, Riesgo, Tiempo, Descripcion, Revisor) VALUES('$IMEI', '$Riesgo','$Tiempo', '$Descripcion', '$Revisor') ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
    case 4:    
        //Limpiar tablas de Tareas para Revisores
        break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;