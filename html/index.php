<?php

	session_start();

$varses1 = $_SESSION['usuario'];

$varses2= $_SESSION['Avatar'];

//Seteamos la fecha
date_default_timezone_set('America/Argentina/Buenos_Aires');
$date = date( "Y-m-d" );

//comparamos inicio de sesion
if($varses1== null|| $varses1=''){
	header("Location: login.php");
	echo "NO";
	die();
}

include 'conexionmysql/contador.php';

 ?>


<!DOCTYPE html>
<html lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ciclat Web Manager | Inicio</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">
<link rel="icon" href="https://tiendaciclat.com/wp-content/uploads/2020/04/cropped-favicon3-32x32.png" sizes="32x32">
<script>
	function reFresh(){
location.reload(true)
}
</script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  

<!-- Inicio - Script Graficas -->
           <script type="text/javascript"> 
           
          google.charts.load('current', {'packages':['corechart']});          
           google.charts.setOnLoadCallback(drawChart); 
           google.charts.setOnLoadCallback(ListosDia); 
          google.charts.setOnLoadCallback(cargadia);

      //Graficas Cargas Revisores 
      
           function mes(){
    	 var data = google.visualization.arrayToDataTable([
         ['Revisores', 'Cantidad Revisada', { role: 'style' }],
          ['Benja', <?php echo $row_mes1 ?>, 'color: #76A7FA'  ],
          ['Lucre', <?php echo $row_mes2 ?>, 'color: red'  ],
          ['Facu',  <?php echo $row_mes3 ?>, 'color: green'  ],
          ['Feli',  <?php echo $row_mes5 ?>, 'color: gold'  ]
        ]);
                var options = {title:'Cantidad de telefonos cargados Por Revisor Este Mes',
                       legend: {position: 'none'},
                       width:1000,
                       height:325};
           
                var chart = new google.visualization.ColumnChart(document.getElementById('cargadia_div'));  
                chart.draw(data, options);
    						}                   
           function cargadia(){
           
           var data = google.visualization.arrayToDataTable([
         ['Revisores', 'Cantidad Revisada', { role: 'style' }],
          ['Benja', <?php echo $row_cantidad1 ?>, 'color: #76A7FA'  ],
          ['Lucre', <?php echo $row_cantidad2 ?>, 'color: red'  ],
          ['Facu',  <?php echo $row_cantidad3 ?>, 'color: green'  ],
          ['Feli',  <?php echo $row_cantidad5 ?>, 'color: gold'  ]
        ]);
           
           
           
            var options = {title:'Cantidad de telefonos cargados Por Revisor Hoy',
                       legend: {position: 'none'},
                       };
           
           var chart = new google.visualization.ColumnChart(document.getElementById('cargadia_div'));
           
           chart.draw(data, options);
           }
       	   
      //Fin Cragas      
           
     //Graficas Ventas       
           function ListosDia(){
            
            
            
        var data = google.visualization.arrayToDataTable([
          ['Dias', 'Listos para vender este dia'],
          ['<?php echo $ayer1 = date( "d-m", strtotime( "-4 day", strtotime( $date ) ) ); ?>',<?php echo $row_fecha1 ?>  ],
          ['<?php echo $ayer2 = date( "d-m", strtotime( "-3 day", strtotime( $date ) ) ); ?>',<?php echo $row_fecha2 ?>  ],
          ['<?php echo $ayer3 = date( "d-m", strtotime( "-2 day", strtotime( $date ) ) ); ?>',<?php echo $row_fecha3 ?>  ],
          ['<?php echo $ayer  = date( "d-m", strtotime( "-1 day", strtotime( $date ) ) ); ?>',<?php echo $row_fecha4 ?>  ],
          ['<?php echo $dateHoy= date("d-m"); ?>',                                            <?php echo $row_fecha5 ?>  ]
        ]);

        var options = {title:'Registrados como Listos para Vender por Dia',
          curveType: 'function',
          legend: { position: 'none' },
        hAxis: {title: 'Registrados como Listos para vender este dia',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('Ventas_div'));

        chart.draw(data, options);
      }      
           
              
           function ListosMes(){
                     
       var data = google.visualization.arrayToDataTable([
         ['Mes', 'Cantidad de Listos para Vender este Mes', { role: 'style' }],
         ['Enero', <?php echo       $row_mesVentas1 ?>, 'color:green'  ],
          ['Febrero', <?php echo     $row_mesVentas2 ?>, 'color:green'],
          ['Marzo',  <?php echo      $row_mesVentas3 ?>, 'color:green'  ],
          ['Abril', <?php echo       $row_mesVentas4 ?>, 'color:green'  ],
          ['Mayo',  <?php echo       $row_mesVentas5 ?>, 'color:green' ],
          ['Junio',  <?php echo      $row_mesVentas6 ?>, 'color:green' ],
          ['Julio',  <?php echo      $row_mesVentas7 ?>, 'color:green' ],
          ['Agosto',  <?php echo     $row_mesVentas8 ?>, 'color:green' ],
          ['Septiembre',  <?php echo $row_mesVentas9 ?>, 'color:green' ],
          ['Octubre',  <?php echo    $row_mesVentas10 ?>, 'color:green' ],
          ['Noviembre',  <?php echo  $row_mesVentas11 ?>, 'color:green' ],
          ['Diciembre',  <?php echo  $row_mesVentas12 ?>, 'color:green' ], // CSS-style declaration
      ]);

        var options = {title:'Total Registrados como Listos para Vender por Mes',
          curveType: 'function',
          legend: { position: 'none' },
        hAxis: {title: 'Listos para Vender por Mes',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('Ventas_div'));

        chart.draw(data, options);
      }
           
            function Vendidos(){
            
            
            
        var data = google.visualization.arrayToDataTable([
          ['Dias', 'Vendidos'],
          ['<?php echo $ayer1 = date( "d-m", strtotime( "-4 day", strtotime( $date ) ) ); ?>',<?php echo $row_fecha1Vendido ?>  ],
          ['<?php echo $ayer2 = date( "d-m", strtotime( "-3 day", strtotime( $date ) ) ); ?>',<?php echo $row_fecha2Vendido ?>  ],
          ['<?php echo $ayer3 = date( "d-m", strtotime( "-2 day", strtotime( $date ) ) ); ?>',<?php echo $row_fecha3Vendido ?>  ],
          ['<?php echo $ayer  = date( "d-m", strtotime( "-1 day", strtotime( $date ) ) ); ?>',<?php echo $row_fecha4Vendido ?>  ],
          ['<?php echo $dateHoy= date("d-m"); ?>',                                            <?php echo $row_fecha5Vendido ?>  ]
        ]);

        var options = {title:'Registrados como Vendidos - Por Dia',
          curveType: 'function',
          legend: { position: 'none' },
        hAxis: {title: 'Vendidos por Dia',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('Ventas_div'));

        chart.draw(data, options);
      }   
           
            function Vendidos_Mes(){
                     
       var data = google.visualization.arrayToDataTable([
          ['Mes', 'Cantidad de Vendidos', { role: 'style' }],
          ['Enero', <?php echo       $row_mesVentas1_Vendido ?>, 'color:green'  ],
          ['Febrero', <?php echo     $row_mesVentas2_Vendido ?>, 'color:green'],
          ['Marzo',  <?php echo      $row_mesVentas3_Vendido ?>, 'color:green'  ],
          ['Abril', <?php echo       $row_mesVentas4_Vendido ?>, 'color:green'  ],
          ['Mayo',  <?php echo       $row_mesVentas5_Vendido ?>, 'color:green' ],
          ['Junio',  <?php echo      $row_mesVentas6_Vendido ?>, 'color:green' ],
          ['Julio',  <?php echo      $row_mesVentas7_Vendido ?>, 'color:green' ],
          ['Agosto',  <?php echo     $row_mesVentas8_Vendido ?>, 'color:green' ],
          ['Septiembre',  <?php echo $row_mesVentas9_Vendido ?>, 'color:green' ],
          ['Octubre',  <?php echo    $row_mesVentas10_Vendido ?>, 'color:green' ],
          ['Noviembre',  <?php echo  $row_mesVentas11_Vendido ?>, 'color:green' ],
          ['Diciembre',  <?php echo  $row_mesVentas12_Vendido ?>, 'color:green' ], // CSS-style declaration
      ]);

        var options = {title:'Total Registrados Vendidos por Mes',
          curveType: 'function',
          legend: { position: 'none' },
        hAxis: {title: 'Vendidos por Mes',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('Ventas_div'));

        chart.draw(data, options);
      }
           
           
           function Ventas_ModeloMes(){
           var data = google.visualization.arrayToDataTable([  
                          ['Marca', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($ModeloMes))  
                          {  
                               echo "['".$row["Modelo"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = { 
                title:'Modelos vendidos este Mes',
                chartArea: {'width': '100%', 'height': '85%'},
                	fontName:'Arial'
                        ,legend: { position: 'right' },
                      is3D:false, 
                		pieHole: 0.3,
                     };  
           
                var chart = new google.visualization.PieChart(document.getElementById('Ventas_div'));
                chart.draw(data, options);
           }
           function Ventas_ModeloHoy(){
           var data = google.visualization.arrayToDataTable([  
                          ['Marca', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($ModeloHoy))  
                          {  
                               echo "['".$row["Modelo"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = { 
                title:'Modelos Listos para vender - Hoy',
                chartArea: {'width': '100%', 'height': '85%'},
                	fontName:'Arial'
                        ,legend: { position: 'right' },
                      is3D:false, 
                		pieHole: 0.3,
                     };  
           
                var chart = new google.visualization.PieChart(document.getElementById('Ventas_div'));
                chart.draw(data, options);
           }
      //Fin Graficas Ventas
           
      //Graficas Stock - Marca y Modelos
           function drawChart(){  
           		
                var data = google.visualization.arrayToDataTable([  
                          ['Marca', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["Marca"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = { 
                chartArea: {'width': '100%', 'height': '100%'},
                	fontName:'Arial'
                        ,legend:'bottom',
                      is3D:true,  
                      pieHole: 0.5  
                
                     };  
           
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                chart.draw(data, options);
           	
           }  
           function Samsung(){
    	 var data = google.visualization.arrayToDataTable([  
                          ['Modelo', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result2))  
                          {  
                               echo "['".$row["Modelo"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = { 
                chartArea: {'width': '100%', 'height': '100%'},
                	fontName:'Arial'
                        ,legend:'bottom',
                      is3D:true,  
                      pieHole: 0.5  
                
                     };  
           
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);
    						}
           function Huawei(){
    	 var data = google.visualization.arrayToDataTable([  
                          ['Modelo', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result6))  
                          {  
                               echo "['".$row["Modelo"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = { 
                chartArea: {'width': '100%', 'height': '100%'},
                	fontName:'Arial'
                        ,legend:'bottom',
                      is3D:true,  
                      pieHole: 0.5  
                
                     };  
           
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);
    						}
           function Motorola(){
    	 var data = google.visualization.arrayToDataTable([  
                          ['Modelo', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result3))  
                          {  
                               echo "['".$row["Modelo"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = { 
                chartArea: {'width': '100%', 'height': '100%'},
                	fontName:'Arial'
                        ,legend:'bottom',
                      is3D:true,  
                      pieHole: 0.5  
                
                     };  
           
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);
    						}
           function LG(){
    	 var data = google.visualization.arrayToDataTable([  
                          ['Modelo', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result4))  
                          {  
                               echo "['".$row["Modelo"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = { 
                chartArea: {'width': '100%', 'height': '100%'},
                	fontName:'Arial'
                        ,legend:'bottom',
                      is3D:true,  
                      pieHole: 0.5  
                
                     };  
           
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);
    						}
           function apple(){
    	 var data = google.visualization.arrayToDataTable([  
                          ['Modelo', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result5))  
                          {  
                               echo "['".$row["Modelo"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = { 
                chartArea: {'width': '100%', 'height': '100%'},
                	fontName:'Arial'
                        ,legend:'bottom',
                      is3D:true,  
                      pieHole: 0.5  
                
                     };  
           
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);
    						}
      //Fin Graficas Stock
           </script>
<!-- FIN - Script Graficas -->

</head>

<body id="page-top" bgcolour="#5a5c69">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Administrador <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-home"></i>
          <span>Inicio</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interfaz
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Configuraciones</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header"><strong>Ajustes: </strong> </h6>
            <a class="collapse-item" href="http://18.216.97.211:10000/" target="_blank">WebMin</a>
            <a class="collapse-item" href="http://18.216.97.211/phpMyAdmin" target="_blank">phpMyAdmin</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="revisores.php">
          <i class="fas fa-fw fa-user"></i>
          <span>Revisores</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Funciones
      </div>


      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Match</span></a>
      </li>
    
    <!-- Nav Item - Tabalas y registros -->
    
	<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-table"></i>
          <span>Registros</span>
        </a>
        <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header"><strong>Tablas: </strong> </h6>
            <a class="collapse-item" href="tables3.php" >Ventas</a>
            <a class="collapse-item" href="eliminados.php" >Eliminados</a>
            <a class="collapse-item" href="tables2.php" >Todos</a>
          </div>
        </div>
      </li>
    
      <!-- Nav Item - Tareas -->
      <li class="nav-item">
        <a class="nav-link" href="tables.php">
          <i class="fas fa-fw fa-tasks"></i>
          <span>Tareas</span></a>
      </li>

    <!-- Nav Item - Repuestos -->
      <li class="nav-item">
        <a class="nav-link" href="http://18.216.97.211/conexionmysql/datatable/index.php">
          <i class="fas fa-fw fa-tools"></i>
          <span>Repuestos</span></a>
      </li>
    
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-dark bg-gray-900 topbar mb-4 static-top shadow" bgcolour="#5a5c69">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto bg-gray-900" backgroundcolour="#5a5c69">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
            </li>

            

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle " href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-white-600 medium"><?php echo $_SESSION['usuario']; ?></span>
                <img class="img-profile rounded-circle" src=http://18.216.97.211/<?php echo $varses2 ?> size=60x60>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Configuracion
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Registro de Actividades
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Salir
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Bienvenido, <?php echo $_SESSION['usuario']; ?>!</h1>
          </div>

          <!-- Content Row 1  -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tel. Listos Para Vender</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php printf($row_cuenta);?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-check-circle fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          
          
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Tel. para Reparar</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php printf($row_rep);?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-tools fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div> 

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tel. De Repuesto</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php printf($row_repu);?></div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $porcentajes2; ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-recycle fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <!--A liberar-->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-purple shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-purple text-uppercase mb-1">Tel. Vendidos</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php printf($row_VendidosTotal);?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>  
                      </div>  

          <div class="row">
          <!--Mal Registrados Total-->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Tel. Mal Registrados</div>
                    <hr>
                      <div align="center" class="h3 mb-0 font-weight-bold text-gray-800"><?php printf($row_mal);?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-times fa-2x text-gray-500"></i>
                    </div>
                  </div>
                
                </div>
              </div>
            </div>  
          
          <!--Mal Registrados hoy-->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Tel. Mal Registrados Hoy</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php printf($row_mal2);?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-exclamation-triangle fa-2x text-gray-500"></i>
                    </div>
                  </div>
                <center>
                <a type="button" class="btn btn-danger small" href=" /conexionmysql/check.php" ><strong>Revisar Todos</strong></a>
                </center>
                </div>
              </div>
            </div>  
          
          <!--Mal Registrados Ayer-->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Tel. con Modulo a Reparar</div>
                    <hr>
                      <div align="center" class="h3 mb-0 font-weight-bold text-gray-800"><?php printf($row_modulo);?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-mobile-alt fa-2x text-gray-500"></i>
                    </div>
                  </div>
                
                </div>
              </div>
            </div>  
          
            <!-- Tel registrados -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Telefonos Registrados</div>
                      <hr>
                      <div align="center" class="h3 mb-0 font-weight-bold text-gray-800"><?php printf($row_cnt);?> </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-500"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          

          <!-- End of Content Row 1  -->

          <!-- Content Row 2 -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-9 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Telefonos Listos para Vender - Vendidos</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header text-primary">Listos para Vender:</div>
                      <a type="button" class="dropdown-item text-dark" onclick="ListosMes()">- Por Mes</a>
                      <a type="button" class="dropdown-item text-dark" onclick="ListosDia()">- Por Dia</a>
                    <div class="dropdown-header text-primary">Vendidos:</div>
                      <a type="button" class="dropdown-item text-dark" onclick="Vendidos_Mes()">- Por Mes</a>
                      <a type="button" class="dropdown-item text-dark" onclick="Vendidos()">- Por Dia</a>
                    <div class="dropdown-header text-primary">Ventas de Modelos:</div>
                    <a type="button" class="dropdown-item text-dark" onclick="Ventas_ModeloMes()">- Este Mes</a>
                      <a type="button" class="dropdown-item text-dark" onclick="Ventas_ModeloHoy()">- Hoy</a>
                      
                    </div>
                  </div>
                </div>
                <!-- Card Body  <canvas id="myAreaChart" ></canvas> -->
                <div class="card-body">
                  <div class="chart-area">
                  
                  <div class="row" >
                  <div class="col">
                  <i class="fas fa-info-circle fa-2x" data-toggle="tooltip" data-html="true" title="Estas Graficas muestran los telefonos registrados para ventas en el dia de Hoy, durante la semana, por mes y tambien los Modelos que se registraron para ventas Hoy y durante el Mes"></i>
                  </div>
                  <div align="right">
                  <a  type="button" class="icon-circle bg-dark text-white" onclick="reFresh()">
                        <i align="right"class="fas fa-sync-alt"></i></a>
                  </div>
                  
                  </div>
                  
                  
                    <div id="Ventas_div" align="left" style="width: 102%; height: 100%"></div>
                  </div>
                <br>
                <hr>
                
                <center>
                <a type="button" class="btn btn-success small" href="conexionmysql/excelVentas.php">Descargar Hoy</a>
                <br>
                <br>
                <i class="mb-4">Revisar Numero IMEI en el formato excel.</i>
                </center>
                </div>
              </div>
            </div>
          
          

            <!-- Pie Chart -->
            <div class="col">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Marcas Registradas</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header text-primary">Marcas:</div>
                      <a type="button" class="dropdown-item" onclick="Samsung()">Samsung</a>
                    <a type="button" class="dropdown-item" onclick="apple()">Apple</a>
                      <a type="button" class="dropdown-item" onclick="Motorola()" >Motorola</a>
                    <a type="button" class="dropdown-item" onclick="LG()" >LG</a>
                      <a type="button" class="dropdown-item" onclick="Huawei()" >Huawei</a>
                      <div class="dropdown-divider"></div>
                      <a type="button" class="dropdown-item font-weight-bold text-dark" onclick="drawChart()" >Todos</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body  <canvas id="myPieChart1"></canvas>  
												<div class="chart-pie pt-4 pb-2"> -->
                <div class="card-body">
                  
                    	<div class="chart-area">  
                  
                       <i class="fas fa-info-circle" data-toggle="tooltip" data-html="true" title="Estas Graficas muestran como esta compuesto el stock de los telefonos por Marcas y Modelos respectivamente">  						</i>
                        
                <div id="piechart"  style="width: 100%; height: 100%"></div> 
                </div>
                       <hr>                       
           </div>  
                 
                </div>
              </div>
            </div>
			
          <!-- End of Content Row 2  -->

          <!-- Content Row 3 -->
        
        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Seguimiento de Revisores</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header text-primary">	Estadisticas:</div>
                      <a type="button" class="dropdown-item text-dark" onclick="mes()">Por Mes</a>
                      <div class="dropdown-divider "></div>
                      <a type="button" class="dropdown-item text-dark" onclick="cargadia()">Hoy</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body  <canvas id="myAreaChart" ></canvas> -->
                <div class="card-body">
                  <div class="chart-area">
                   					     <div id="cargadia_div" style="width: 100%; height: 100%"></div>
                  </div>
                </div>
              </div>
            </div>
        
        
          <!-- Content Row -->
         
          </div>
          <!-- End of Content Row 3  -->
 <div class="row">

            <!-- Content Column -->
            <div class="col">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Seguimiento y Estadisticas Generales</h6>
                </div>
                <div class="card-body bg-dark">
                  <h4 class="small font-weight-bold text-white">Repuestos <span class="float-right"><?php echo $porcentajes2; ?> %</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $porcentajes2; ?>%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold text-white">Telefonos para Liberar <span class="float-right"><?php echo $porcentajes; ?> %</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $porcentajes; ?>%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold text-white">Tel. Listos para Vender<span class="float-right"><?php echo $porcentajes4; ?> %</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar" role="progressbar" style="width: <?php echo $porcentajes4; ?>%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold text-white">Tel. Vendidos<span class="float-right"><?php echo $porcentajes5; ?> %</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $porcentajes5; ?>%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold text-white">Tel. Mal Cargados <span class="float-right"><?php echo $porcentajes1; ?> %</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $porcentajes1; ?>%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold text-white">Tel. para Reparar <span class="float-right"><?php echo $porcentajes3; ?> %</span></h4>
                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $porcentajes3; ?>%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>

             
            </div>

            <div class="col">

              <!-- Illustrations  <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt=""> -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Acceso directo Tareas</h6>
                </div>
                <div class="card-body bg-secondary">
                  <div class="text-center">
                    	<center>
              
               
                          <table class="table table-responsive table-hover table-bordered table-dark" id="tablaCompras" width="100%" cellspacing="0">
                            <thead>
                              <tr>
                                <th >Marca</th>
                                <th ><center>Modelo</center></th>
                                <th ><center>Repuesto</center></th>
                                <th ><center>Cantidad</center></th>
                                <th ><center>Descripcion</center></th>
                                <th ><center>Listo</center></th>                                   
                              </tr>
                            </thead>
                            <tbody style="background-color:#1b1e23 ">
                            
                           
                            </tbody>
                          </table>                   
                    <hr>
              <a type="button" class="btn btn-primary" href="tables.php">Ir a Tareas</a>
              
             </center>
                  </div>                  
                </div>
              </div>
            </div>

              
            </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Ciclat Web Manager 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog col-lg-6" role="document">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="exampleModalLabel">Finalizar Tarea?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formUsuarios">    
            <div class="modal-body text-white" >
                <div class="row">
                    <div class="col">
                    <div class="input-group mb-3">
 							 <div class="input-group-prepend">
   								 <span class="input-group-text" id="inputGroup-sizing-default6">Marca</span>
  							</div>
 								 <input type="text" class="form-control" id="Marca">
						  </div>
                    </div>    
                </div>
                <div class="row">
                    <div class="col">
                    <div class="input-group mb-3">
 							 <div class="input-group-prepend">
   								 <span class="input-group-text" id="inputGroup-sizing-default6">Modelo</span>
  							</div>
 								 <input type="text" class="form-control" id="Modelo">
						  </div>
                    </div>    
                </div>
            	<div class="row">
                <div class="col">
                    <div class="input-group mb-3">
 							 <div class="input-group-prepend">
   								 <span class="input-group-text" id="inputGroup-sizing-default6">Repuesto</span>
  							</div>
 								 <input type="text" class="form-control" id="Repuesto">
						  </div>
                    </div>    
                </div>
            	<div class="row">
                    <div class="col">
                    <div class="input-group mb-3">
 							 <div class="input-group-prepend">
   								 <span class="input-group-text" id="inputGroup-sizing-default6">Cantidad</span>
  							</div>
 								 <input type="text" class="form-control" id="Cantidad" >
						  </div>
                    </div>    
                </div>
                <div class="row">
                    <div class="col">
                    <div class="input-group">
  					<div class="input-group-prepend">
    					<span class="input-group-text">Descripcion</span>
  					</div>
 				<input type="text" class="form-control" id="Descripcion" >
				</div>
                    </div>    
                </div>
            	
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-success">Confirmar</button>
            </div>
        </form>    
        </div>
    </div>
</div>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Finalizar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">X</span>
          </button>
        </div>
        <div class="modal-body">Selecciona "Salir" para terminar la sesion.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-danger" href="conexionmysql/cerrarsesion.php">Salir</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
  <script src="conexionmysql/ajaxCompras/main.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</body>

</html>