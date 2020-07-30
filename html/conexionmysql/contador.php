<?php
/* para producción
$mysqli = new mysqli("localhost", "root", "administrador", "ultimavers_db");
*/

/* para localhost */
$mysqli = new mysqli("localhost", "root", "", "ultimavers_db");

define("SELECT_FROM_CELULAR","SELECT * FROM CELULAR");

/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}

date_default_timezone_set('America/Argentina/Buenos_Aires');
$script_tz = date_default_timezone_get();

$date = date( "Y-m-d" );

$mesDate= date("Y-m");

$Anual = date('Y');
$MesAct = date('m');
//Tel Registrados

$result = $mysqli->query("SELECT a.ID, COUNT(*) AS num FROM CELULAR AS a GROUP BY a.ID"); 

    /* determinar el número de filas del resultado */
    $row_cnt = $result->num_rows;

    /* cerrar el resultset */
    $result->close();


//Tel en Buen estado
       
$resultado = $mysqli->query(SELECT_FROM_CELULAR." WHERE estado='Listo para vender' OR estado='Listo para Vender' OR estado='Para vender'"); 

    /* determinar el número de filas del resultado */
    $row_cuenta = $resultado->num_rows;

    /* cerrar el resultset */
    $resultado->close();

//Tel para Reparar

$res = $mysqli->query(SELECT_FROM_CELULAR." WHERE estado='reparar' OR estado='arreglar' OR estado='Para Reparar' OR estado='Para reparar'"); 

    /* determinar el número de filas del resultado */
    $row_rep = $res->num_rows;

    /* cerrar el resultset */
    $res->close();

//Tel para Repuesto

$res1 = $mysqli->query(SELECT_FROM_CELULAR." WHERE estado='Repuesto' OR estado='Para Repuesto' OR estado='Repuestos'"); 

    /* determinar el número de filas del resultado */
    $row_repu = $res1->num_rows;

    /* cerrar el resultset */
    $res1->close();

$porcen_repu= $row_repu*100/$row_cnt;


//Tel para Liberar

$res2 = $mysqli->query(SELECT_FROM_CELULAR." WHERE estado='Vendido' OR estado='Ventas'"); 

    /* determinar el número de filas del resultado */
    $row_VendidosTotal = $res2->num_rows;

    /* cerrar el resultset */
    $res2->close();

//Tels Vendidos

$res_ventas = $mysqli->query(SELECT_FROM_CELULAR." WHERE estado='Vendido' OR estado='Ventas'"); 

    /* determinar el número de filas del resultado */
    $row_ventas = $res_ventas->num_rows;

    /* cerrar el resultset */
    $res2->close();

//Tel mal Cargados Total
$res3 = $mysqli->query(SELECT_FROM_CELULAR." WHERE estado='Seleccione' OR estado='' OR Marca='Seleccione' OR Modelo='Seleccione' OR Revisor='Seleccione'"); 

    /* determinar el número de filas del resultado */
    $row_mal = $res3->num_rows;

    /* cerrar el resultset */
    $res3->close();

$date1 = date( "Y-m-d" );

//Tel mal Cargados Hoy
$res4 = $mysqli->query(SELECT_FROM_CELULAR." WHERE Estado='Seleccione' AND Fecha='$date1' OR Estado='' AND Fecha='$date1' OR Marca='Seleccione' AND Fecha='$date1' OR Modelo='Seleccione' AND Fecha='$date1' OR Revisor='Seleccione' AND Fecha='$date1'"); 

    /* determinar el número de filas del resultado */
    $row_mal2 = $res4->num_rows;

    /* cerrar el resultset */
    $res4->close();

$date2 = date( "Y-m-d", strtotime( "-1 day", strtotime( $date1 ) ) );

//Tel Modulo dañado - Liberados - Para reparar
$res5 = $mysqli->query(SELECT_FROM_CELULAR." WHERE Estado='Reparar' AND Modulo='NO' AND Liberar='-' AND Estetica='A' OR Estado='Reparar' AND Modulo='NO' AND Liberar='-' AND Estetica='B'");
    /* determinar el número de filas del resultado */
    $row_modulo = $res5->num_rows;

    /* cerrar el resultset */
    $res5->close();

//Tel a Liberar
$resLib = $mysqli->query(SELECT_FROM_CELULAR." WHERE Estado='Liberar' ");
    $row_lib = $resLib->num_rows;

    /* cerrar el resultset */
    $resLib->close();

//Tel Vendidos
$resVentas = $mysqli->query(SELECT_FROM_CELULAR." WHERE Estado='Vendido' OR Estado='Ventas' ");
    $row_ventas = $resVentas->num_rows;

    /* cerrar el resultset */
    $resVentas->close();

//porcentaje Tel. a Liberar
$porcentajes = round((100 * $row_lib) / $row_cnt);
$porcentajes1 = round((100 * $row_mal) / $row_cnt);
$porcentajes2 = round((100 * $row_repu) / $row_cnt);
$porcentajes3 = round((100 * $row_rep) / $row_cnt);
$porcentajes4 = round((100 * $row_cuenta) / $row_cnt);
$porcentajes5 = round((100 * $row_ventas) / $row_cnt);



//Grafico Pie General
 $query = "SELECT Marca, count(*) as number FROM CELULAR GROUP BY Marca";  

//Grafico pie por Marca
 $query2 = "SELECT Modelo, count(*) as number FROM CELULAR WHERE Marca='samsung' GROUP BY Modelo";  
 $query3 = "SELECT Modelo, count(*) as number FROM CELULAR WHERE Marca='Motorola' GROUP BY Modelo";  
 $query4 = "SELECT Modelo, count(*) as number FROM CELULAR WHERE Marca='LG' GROUP BY Modelo";  
 $query5 = "SELECT Modelo, count(*) as number FROM CELULAR WHERE Marca='Apple' GROUP BY Modelo";  
 $query6 = "SELECT Modelo, count(*) as number FROM CELULAR WHERE Marca='Huawei' GROUP BY Modelo";  

$result = mysqli_query($mysqli, $query);
$result2 = mysqli_query($mysqli, $query2);
$result3 = mysqli_query($mysqli, $query3);
$result4 = mysqli_query($mysqli, $query4);
$result5 = mysqli_query($mysqli, $query5);
$result6 = mysqli_query($mysqli, $query6);

//Grafico Modelos Vendidos Mes

$queryModeloMes = "SELECT Modelo, count(*) as number FROM CELULAR WHERE Estado='Listo para Vender' AND Fecha LIKE '%$mesDate%' GROUP BY Modelo";  

$ModeloMes = mysqli_query($mysqli, $queryModeloMes);

//Grafico Modelos Vendidos Hoy

$queryModeloHoy = "SELECT Modelo, count(*) as number FROM CELULAR WHERE Estado='Listo para Vender' AND Fecha LIKE '%$date%' GROUP BY Modelo";  

$ModeloHoy = mysqli_query($mysqli, $queryModeloHoy);

// Resultados del Dia por Revisor
 
$revisor1 = $mysqli->query(SELECT_FROM_CELULAR." WHERE Revisor='Benjamin' AND Fecha='$date'");
$revisor2 = $mysqli->query(SELECT_FROM_CELULAR." WHERE Revisor='Lucrecio' AND Fecha='$date'");
$revisor3 = $mysqli->query(SELECT_FROM_CELULAR." WHERE Revisor='facundo' AND Fecha='$date' OR Revisor='Facundo'  AND Fecha LIKE '$date'");
$revisor5 = $mysqli->query(SELECT_FROM_CELULAR." WHERE Revisor='Feli' AND Fecha='$date'");

$row_cantidad1 =$revisor1->num_rows;
$row_cantidad2 =$revisor2->num_rows;
$row_cantidad3 =$revisor3->num_rows;
$row_cantidad5 =$revisor5->num_rows;


//Set comparacion FECHA en Tabla
$query_ayer1 = date( "Y-m-d", strtotime( "-4 day", strtotime( $date ) ) ); 
$query_ayer2 = date( "Y-m-d", strtotime( "-3 day", strtotime( $date ) ) ); 
$query_ayer3 = date( "Y-m-d", strtotime( "-2 day", strtotime( $date ) ) ); 
$query_ayer4 = date( "Y-m-d", strtotime( "-1 day", strtotime( $date ) ) ); 


//Cantidad Listos para vender por dia
$query_1 =$mysqli->query(SELECT_FROM_CELULAR." WHERE Fecha= '$query_ayer1' AND Estado='Listo para vender'");  
$query_2 =$mysqli->query(SELECT_FROM_CELULAR." WHERE Fecha= '$query_ayer2' AND Estado='Listo para vender'");  
$query_3 =$mysqli->query(SELECT_FROM_CELULAR." WHERE Fecha= '$query_ayer3' AND Estado='Listo para vender'");  
$query_4 =$mysqli->query(SELECT_FROM_CELULAR." WHERE Fecha= '$query_ayer4' AND Estado='Listo para vender'");  
$query_5 =$mysqli->query(SELECT_FROM_CELULAR." WHERE Fecha= '$date' AND Estado='Listo para vender'");


$row_fecha1 =$query_1->num_rows;
$row_fecha2 =$query_2->num_rows;
$row_fecha3 =$query_3->num_rows;
$row_fecha4 =$query_4->num_rows;
$row_fecha5 =$query_5->num_rows;


// Contador Cargas mensuales por Revisor 

$revisorMes1 = $mysqli->query(SELECT_FROM_CELULAR." WHERE Revisor='Benjamin' AND Fecha LIKE '%$mesDate%'");
$revisorMes2 = $mysqli->query(SELECT_FROM_CELULAR." WHERE Revisor='Lucrecio' AND Fecha LIKE '%$mesDate%'");
$revisorMes3 = $mysqli->query(SELECT_FROM_CELULAR." WHERE Revisor='Facundo'  AND Fecha LIKE '%$mesDate%' OR Revisor='facundo'  AND Fecha LIKE '%$mesDate%'");
$revisorMes5 = $mysqli->query(SELECT_FROM_CELULAR." WHERE Revisor='Feli'     AND Fecha LIKE '%$mesDate%'");

$row_mes1 =$revisorMes1->num_rows;
$row_mes2 =$revisorMes2->num_rows;
$row_mes3 =$revisorMes3->num_rows;
$row_mes5 =$revisorMes5->num_rows;

// Contador Listos para vender Mensuales

$VentasMes1  = $mysqli->query(SELECT_FROM_CELULAR." WHERE Estado='Listo para Vender' And Fecha LIKE '%$Anual-01-%' ");
$VentasMes2  = $mysqli->query(SELECT_FROM_CELULAR." WHERE Estado='Listo para Vender' And Fecha LIKE '%$Anual-02-%' ");
$VentasMes3  = $mysqli->query(SELECT_FROM_CELULAR." WHERE Estado='Listo para Vender' And Fecha LIKE '%$Anual-03-%' ");
$VentasMes4  = $mysqli->query(SELECT_FROM_CELULAR." WHERE Estado='Listo para Vender' And Fecha LIKE '%$Anual-04-%' ");
$VentasMes5  = $mysqli->query(SELECT_FROM_CELULAR." WHERE Estado='Listo para Vender' And Fecha LIKE '%$Anual-05-%' ");
$VentasMes6  = $mysqli->query(SELECT_FROM_CELULAR." WHERE Estado='Listo para Vender' And Fecha LIKE '%$Anual-06-%' ");
$VentasMes7  = $mysqli->query(SELECT_FROM_CELULAR." WHERE Estado='Listo para Vender' And Fecha LIKE '%$Anual-07-%' ");
$VentasMes8  = $mysqli->query(SELECT_FROM_CELULAR." WHERE Estado='Listo para Vender' And Fecha LIKE '%$Anual-08-%' ");
$VentasMes9  = $mysqli->query(SELECT_FROM_CELULAR." WHERE Estado='Listo para Vender' And Fecha LIKE '%$Anual-09-%' ");
$VentasMes10 = $mysqli->query(SELECT_FROM_CELULAR." WHERE Estado='Listo para Vender' And Fecha LIKE '%$Anual-10-%' ");
$VentasMes11 = $mysqli->query(SELECT_FROM_CELULAR." WHERE Estado='Listo para Vender' And Fecha LIKE '%$Anual-11-%' ");
$VentasMes12 = $mysqli->query(SELECT_FROM_CELULAR." WHERE Estado='Listo para Vender' And Fecha LIKE '%$Anual-12-%' ");

$row_mesVentas1  =$VentasMes1->num_rows;
$row_mesVentas2  =$VentasMes2->num_rows;
$row_mesVentas3  =$VentasMes3->num_rows;
$row_mesVentas4  =$VentasMes4->num_rows;
$row_mesVentas5  =$VentasMes5->num_rows;
$row_mesVentas6  =$VentasMes6->num_rows;
$row_mesVentas7  =$VentasMes7->num_rows;
$row_mesVentas8  =$VentasMes8->num_rows;
$row_mesVentas9  =$VentasMes9->num_rows;
$row_mesVentas10 =$VentasMes10->num_rows;
$row_mesVentas11 =$VentasMes11->num_rows;
$row_mesVentas12 =$VentasMes12->num_rows;


//Contador Marcados como Vendidos Mensual

$VentasMes1_Vendido  = $mysqli->query(SELECT_FROM_CELULAR." WHERE Estado='Vendido' And Fecha LIKE '%$Anual-01-%' ");
$VentasMes2_Vendido  = $mysqli->query(SELECT_FROM_CELULAR." WHERE Estado='Vendido' And Fecha LIKE '%$Anual-02-%' ");
$VentasMes3_Vendido  = $mysqli->query(SELECT_FROM_CELULAR." WHERE Estado='Vendido' And Fecha LIKE '%$Anual-03-%' ");
$VentasMes4_Vendido  = $mysqli->query(SELECT_FROM_CELULAR." WHERE Estado='Vendido' And Fecha LIKE '%$Anual-04-%' ");
$VentasMes5_Vendido  = $mysqli->query(SELECT_FROM_CELULAR." WHERE Estado='Vendido' And Fecha LIKE '%$Anual-05-%' ");
$VentasMes6_Vendido  = $mysqli->query(SELECT_FROM_CELULAR." WHERE Estado='Vendido' And Fecha LIKE '%$Anual-06-%' ");
$VentasMes7_Vendido  = $mysqli->query(SELECT_FROM_CELULAR." WHERE Estado='Vendido' And Fecha LIKE '%$Anual-07-%' ");
$VentasMes8_Vendido  = $mysqli->query(SELECT_FROM_CELULAR." WHERE Estado='Vendido' And Fecha LIKE '%$Anual-08-%' ");
$VentasMes9_Vendido  = $mysqli->query(SELECT_FROM_CELULAR." WHERE Estado='Vendido' And Fecha LIKE '%$Anual-09-%' ");
$VentasMes10_Vendido = $mysqli->query(SELECT_FROM_CELULAR." WHERE Estado='Vendido' And Fecha LIKE '%$Anual-10-%' ");
$VentasMes11_Vendido = $mysqli->query(SELECT_FROM_CELULAR." WHERE Estado='Vendido' And Fecha LIKE '%$Anual-11-%' ");
$VentasMes12_Vendido = $mysqli->query(SELECT_FROM_CELULAR." WHERE Estado='Vendido' And Fecha LIKE '%$Anual-12-%' ");

$row_mesVentas1_Vendido  =$VentasMes1_Vendido ->num_rows;
$row_mesVentas2_Vendido  =$VentasMes2_Vendido ->num_rows;
$row_mesVentas3_Vendido  =$VentasMes3_Vendido ->num_rows;
$row_mesVentas4_Vendido  =$VentasMes4_Vendido ->num_rows;
$row_mesVentas5_Vendido  =$VentasMes5_Vendido ->num_rows;
$row_mesVentas6_Vendido  =$VentasMes6_Vendido ->num_rows;
$row_mesVentas7_Vendido  =$VentasMes7_Vendido ->num_rows;
$row_mesVentas8_Vendido  =$VentasMes8_Vendido ->num_rows;
$row_mesVentas9_Vendido  =$VentasMes9_Vendido ->num_rows;
$row_mesVentas10_Vendido =$VentasMes10_Vendido->num_rows;
$row_mesVentas11_Vendido =$VentasMes11_Vendido->num_rows;
$row_mesVentas12_Vendido =$VentasMes12_Vendido->num_rows;


//Cantidad Vendido vender por dia
$query_1Vendido =$mysqli->query(SELECT_FROM_CELULAR." WHERE Fecha= '$query_ayer1' AND Estado='Vendido'");  
$query_2Vendido =$mysqli->query(SELECT_FROM_CELULAR." WHERE Fecha= '$query_ayer2' AND Estado='Vendido'");  
$query_3Vendido =$mysqli->query(SELECT_FROM_CELULAR." WHERE Fecha= '$query_ayer3' AND Estado='Vendido'");  
$query_4Vendido =$mysqli->query(SELECT_FROM_CELULAR." WHERE Fecha= '$query_ayer4' AND Estado='Vendido'");  
$query_5Vendido =$mysqli->query(SELECT_FROM_CELULAR." WHERE Fecha= '$date' AND Estado='Vendido'");


$row_fecha1Vendido =$query_1Vendido->num_rows;
$row_fecha2Vendido =$query_2Vendido->num_rows;
$row_fecha3Vendido =$query_3Vendido->num_rows;
$row_fecha4Vendido =$query_4Vendido->num_rows;
$row_fecha5Vendido =$query_5Vendido->num_rows;

/* cerrar la conexión */
$mysqli->close();
?>