<?php
session_start();
	//session_start();
	//include 'login-user.php';
	//include 'conexionmysql/sesiones.php';	
$varses1 = $_SESSION['usuario'];
//echo $varses1;
if($varses1== null|| $varses1=''){
	header("Location: http://18.216.97.211/login.php");
	echo "NO";
	die();
}
?>

<?php
        include 'conectar.php';
                
                $idmod= $_REQUEST['idmod'];
                $imeimod= $_REQUEST['imeimod'];
                $versionmod= $_REQUEST['versionmod'];
                
                echo $idmod;

                    $sql="DELETE FROM CELULAR WHERE id='$idmod' AND imei='$imeimod' AND version='$versionmod'";
                    
                    
                    if ($conexion->query($sql) === TRUE) {
                            //header('Location: http://18.216.97.211/tables2.php');
                    } else {
                        echo "Error: " . $sql . "<br>" . $conexion->error;
                    }
        
        $conexion->close();

	$conn1 = new mysqli('localhost','root','administrador','database');

	$sql4 = "DELETE FROM CELULAR WHERE imei='$imeimod' ";
    
    if ($conn1->query($sql4) === TRUE) {
                            header('Location: http://18.216.97.211/tables2.php');
                    } else {
                            echo "Error: " . $sql4 . "<br>" . $conn1->error;

                    }

        ?>