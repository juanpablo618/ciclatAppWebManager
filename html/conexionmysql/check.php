
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

<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ciclat Web Manager | Mal Cargados</title>

  <!-- Custom fonts for this template-->
  <link href="http://18.216.97.211/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="http://18.216.97.211/css/sb-admin-2.css" rel="stylesheet">

	<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" >
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/css/select.bootstrap4.min.css" >

</head>

<body id="page-top" bgcolour="#5a5c69">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="http://18.216.97.211/index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Administrador <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="http://18.216.97.211/index.php">
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
            <h6 class="collapse-header">Desarrollo:</h6>
            <a class="collapse-item" href="http://18.216.97.211:10000/">WebMin</a>
            <a class="collapse-item" href="http://18.216.97.211/phpMyAdmin">phpMyAdmin</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="http://18.216.97.211/#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilidades</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Utilidades Personalizadas:</h6>
            <a class="collapse-item" href="http://18.216.97.211/utilities-color.html">Colores</a>
            <a class="collapse-item" href="http://18.216.97.211/utilities-border.html">Bordes</a>
            <a class="collapse-item" href="http://18.216.97.211/utilities-animation.html">Animaciones</a>
            <a class="collapse-item" href="http://18.216.97.211/utilities-other.html">Otros</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="http://18.216.97.211/#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Paginas</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="http://18.216.97.211/login.html">Ingresar</a>
            <a class="collapse-item" href="http://18.216.97.211/register.html">Registro</a>
            <a class="collapse-item" href="http://18.216.97.211/forgot-password.html">Olivide mi ContraseÃƒÂ±a</a>
            <div class="collapse-divider"></div>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="http://18.216.97.211/charts.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Match</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="http://18.216.97.211/tables.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Tareas</span></a>
      </li>
	
    <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="conexionmysql/inventario.php">
          <i class="fas fa-fw fa-tools"></i>
          <span>Repuestos</span></a>
      </li>
    
        <li class="nav-item active">
        <a class="nav-link" href="http://18.216.97.211/tables2.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Registros</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

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
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              
            </li>
        </ul>
            </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
    
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3" align="center">
              <h6 class="m-1 font-weight-bold text-primary" align="center">Tabla de Registros Mal Cargados</h6>
            </div>
            <div class="card-body bg-dark">
              <div class="table-responsive table-dark">
                <table class="table table-hover table-bordered table-dark" id="dataTable1" width="100%" cellspacing="0">
                  <thead >
                    <tr>
                      
                      <th class="m-0 font-weight-bold text-white"><center>ACCIONES</center></th>
                      <th class="m-0 font-weight-bold text-white">ID</th>
                      <th class="m-0 font-weight-bold text-white"><center>IMEI</center></th>
                      <th class="m-0 font-weight-bold text-white">Marca</th>
                      <th class="m-0 font-weight-bold text-white">Modelo</th>
                      <th class="m-0 font-weight-bold text-white">Fecha</th>
                      <th class="m-0 font-weight-bold text-white">Estado</th>
                      <th class="m-0 font-weight-bold text-white">Revisor</th>
                      <th class="m-0 font-weight-bold text-white">GB</th>
                      <th class="m-0 font-weight-bold text-white">Color</th>
                      <th class="m-0 font-weight-bold text-white">Estetica</th>
                      <th class="m-0 font-weight-bold text-white">Carcasa</th>
                      <th class="m-0 font-weight-bold text-white">CamaraTrasera</th>
                      <th class="m-0 font-weight-bold text-white">CamaraDelantera</th>
                      <th class="m-0 font-weight-bold text-white">PinCarga</th>
                      <th class="m-0 font-weight-bold text-white">Auriculares</th>
                      <th class="m-0 font-weight-bold text-white">ParlanteFrontal</th>
                      <th class="m-0 font-weight-bold text-white">SensorProx</th>
                      <th class="m-0 font-weight-bold text-white">Bateria</th>
                      <th class="m-0 font-weight-bold text-white">BateriaPorcentaje</th>
                      <th class="m-0 font-weight-bold text-white">Wifi</th>
                      <th class="m-0 font-weight-bold text-white">Bluetooth</th>
                      <th class="m-0 font-weight-bold text-white">Vidrio</th>
                      <th class="m-0 font-weight-bold text-white">Modulo</th>
                      <th class="m-0 font-weight-bold text-white">Traslucido</th>
                      <th class="m-0 font-weight-bold text-white" width="60px">Otros</th>
                      <th class="m-0 font-weight-bold text-white">Lugar</th>
                      <th class="m-0 font-weight-bold text-white">Liberar</th>
                      <th class="m-0 font-weight-bold text-white">PortaSim</th>
                      <th class="m-0 font-weight-bold text-white">Microfono</th>
                      <th class="m-0 font-weight-bold text-white">Botones</th>
                      <th class="m-0 font-weight-bold text-white">Tactil</th>
                      <th class="m-0 font-weight-bold text-white">version</th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      
                      <th><center>ACCIONES</center></th>
                      <th>ID</th>
                      <th><center>IMEI</center></th>
                      <th>Marca</th>
                      <th>Modelo</th>
                      <th>Fecha</th>
                      <th>Estado</th>
                      <th>Revisor</th>
                      <th>GB</th>
                      <th>Color</th>
                      <th>Estetica</th>
                      <th>Carcasa</th>
                      <th>CamaraTrasera</th>
                      <th>CamaraDelantera</th>
                      <th>PinCarga</th>
                      <th>Auriculares</th>
                      <th>ParlanteFrontal</th>
                      <th>SensorProx</th>
                      <th>Bateria</th>
                      <th>BateriaPorcentaje</th>
                      <th>Wifi</th>
                      <th>Bluetooth</th>
                      <th>Vidrio</th>
                      <th>Modulo</th>
                      <th>Traslucido</th>
                      <th>Otros</th>
                      <th>Lugar</th>
                      <th>Liberar</th>
                      <th>PortaSim</th>
                      <th>Microfono</th>
                      <th>Botones</th>
                      <th>Tactil</th>
                      <th>version</th>
                      
                      
                    </tr>
                  </tfoot>
                  <tbody style="background-color:#1b1e23 ">
                   <?php
                        include('conectar.php');
                        
						$query="SELECT * FROM CELULAR WHERE Estado='Seleccione' OR estado='' OR Marca='Seleccione' OR Modelo='Seleccione' OR Revisor='Seleccione'";
                        $resultado=$conexion->query($query);
                        while($row=$resultado->fetch_assoc()){
                        $id   = $row[' ID '];
                        $imei = $row['IMEI'];
                    ?>
                   <tr>
                   <td><a href="#edit<?php echo $row['IMEI'];?>" data-toggle="modal" class="btn btn-warning"><span class='fas fa-edit' aria-hidden='true'></span></a>
                    
                  
                  			 <a href="#delete2<?php echo $row['IMEI']; ?>" class="btn btn-danger" data-toggle="modal"><span class='fas fa-trash' aria-hidden='true'></span></a>
                   		

                   
                  			 <a href="conexionmysql/vendidos.php?idmod=<?php echo $row['ID']; ?>&imeimod=<?php echo $row['IMEI']; ?>&versionmod=<?php echo $row['version']; ?>" class="btn btn-success btn-sm"><span class='fas fa-check' aria-hidden='true'></span>Vendido</a>
                   
                   </td>
                    <td><center><?php echo $row['ID']                ?></center></td>
                    <td><center><?php echo $row['IMEI']              ?></center></td>                    
                    <td><center><?php echo $row['Marca']             ?></center></td>                    
                    <td><center><?php echo $row['Modelo']            ?></center></td>
                    <td><center><?php echo $row['Fecha']             ?></center></td>
                    <td><center><strong><?php echo $row['Estado']    ?></strong></center></td>
                    <td><center><?php echo $row['Revisor']           ?></center></td>
                    <td><center><?php echo $row['GB']                ?></center></td>
                    <td><center><?php echo $row['Color']             ?></center></td>
                    <td><center><?php echo $row['Estetica']          ?></center></td>
                    <td><center><?php echo $row['Carcasa']           ?></center></td>
                    <td><center><?php echo $row['CamaraTrasera']     ?></center></td>
                    <td><center><?php echo $row['CamaraDelantera']   ?></center></td>
                    <td><center><?php echo $row['PinCarga']          ?></center></td>
                    <td><center><?php echo $row['Auriculares']       ?></center></td>   
                    <td><center><?php echo $row['ParlanteFrontal']   ?></center></td>
                    <td><center><?php echo $row['SensorProx']        ?></center></td>
                    <td><center><?php echo $row['Bateria']           ?></center></td>
                    <td><center><?php echo $row['BateriaPorcentaje'] ?></center></td>
                    <td><center><?php echo $row['Wifi']              ?></center></td>
                    <td><center><?php echo $row['Bluetooth']         ?></center></td>
                    <td><center><?php echo $row['Vidrio']            ?></center></td>
                    <td><center><?php echo $row['Modulo']            ?></center></td>
                    <td><center><?php echo $row['Traslucido']        ?></center></td>
                    <td><center><?php echo $row['Otros']             ?></center></td>
                    <td><center><?php echo $row['Lugar']             ?></center></td>
                    <td><center><?php echo $row['Liberar']           ?></center></td>
                    <td><center><?php echo $row['PortaSim']          ?></center></td>
                    <td><center><?php echo $row['Microfono']         ?></center></td>
                    <td><center><?php echo $row['Botones']           ?></center></td>
                    <td><center><?php echo $row['Tactil']            ?></center></td>
                    <td><center><?php echo $row['version']           ?></center></td>
                    
                   
                         <!-- Modal Eliminar Registro - INICIO -->
                              <div id="delete2<?php echo $row['IMEI']; ?>" class="modal fade" role="dialog">
 								 <div class="modal-dialog bg-dark modal-lg">
 								   <div class="modal-content bg-dark">
   								      <div class="modal-header">
   								      	<h4 class="modal-title" id="exampleModalLongTitle">Seguro que quieres eliminar estos datos ?</h4>
    								   	  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    								         <span aria-hidden="true">&times;</span>
    								       </button>
   								    </div>
  								         <div class="modal-body">                                       
                                         <div class="row">
                                         <div class="col-sm-4">
                                           <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">IMEI</span>
 											 </div>
 												 <span class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" ><?php echo $row['IMEI']; ?></span>
									     </div>
									   </div>
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Marca</span>
 											 </div>
 												 <span class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" ><?php echo $row['Marca']; ?></span>
									     </div>
									   </div>                                      
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Modelo</span>
 											 </div>
 												 <span class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"><?php echo $row['Modelo']; ?></span>
									     </div>
									   </div>
                                    	 <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Color</span>
 											 </div>
 												 <span class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"><?php echo $row['Color']; ?></span>
									     </div>
									   </div>
                                         </div>
                                         <hr>
                                         <div class="alert alert-danger" role="alert">
                                         Verifique los datos antes de eliminar.<strong> Esta accion es irreversible!</strong>
										</div>
    								       </div>
    								       <div class="modal-footer">
     								        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
		 								       <a href="eliminar-fin.php?idmod=<?php echo $row['ID']; ?>&imeimod=<?php echo $row['IMEI']; ?>&versionmod=<?php echo $row['version']; ?>" class="btn btn-danger">Eliminar</a>
           									
 												
 								        </div>
 								      </div>
  								   </div>
    						</div>
                         <!-- Modal Eliminar Registro - FIN -->
                   
                         <!-- Modal Editar Registro - Inicio -->                   
                          <div id="edit<?php echo $row['IMEI'];?>" class="modal fade" role="dialog">
                        <form method="post" class="form-horizontal" role="form" action="carga_modif.php">
                            <div class="modal-dialog modal-lg">
                                <!-- Modal content-->
                                <div class="modal-content bg-dark">
                                    <div class="modal-header">
                                      <h4 class="modal-title text-white">Editar Registro</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                <br>
                                <div class="row" style="margin-left: 1.2rem; margin-right: 1.2rem;" >
                                <div class="col">
                                           <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">ID</span>
 											 </div>
 												 <input type="text" name="ID" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['ID']; ?>">
									     </div>
                                	 </div>
                                 <div class="col">
                                           <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">IMEI</span>
 											 </div>
 												 <input type="text" name="IMEI"  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['IMEI']; ?>">
									     </div>
									   </div>
                                </div>
								<div class="row"style="margin-left: 1.2rem; margin-right: 1.2rem;" >
                                
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Marca</span>
 											 </div>
 												 <input type="text"  name="Marca" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['Marca']; ?>">
									     </div>
									   </div>                                      
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Modelo</span>
 											 </div>
 												 <input type="text" name="Modelo"  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['Modelo']; ?>">
									     </div>
									   </div>
                                    	 <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Color</span>
 											 </div>
 												 <input type="text"  name="Color" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['Color']; ?>">
									     </div>
									   </div>
                                
                                
                                </div>
								<div class="row"style="margin-left: 1.2rem; margin-right: 1.2rem;" >
                                 		 <div class="col">
                                           <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Fecha</span>
 											 </div>
 												 <input type="text" name="Fecha"  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo date('Y-m-d'); ?>">
									     </div>
									   </div>
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Estado</span>
 											 </div>
 												 <input type="text" name="Revisor"  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['Estado']; ?>">
									     </div>
									   </div>                                      
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">GB</span>
 											 </div>
 												 <input type="number" name="GB"  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['GB']; ?>">
									     </div>
									   </div>
                                    	 <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Estetica</span>
 											 </div>
 												 <input type="text"  name="Estetica" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['Estetica']; ?>">
									     </div>
									   </div>
                                
                                
                                </div>
                                <div class="row"style="margin-left: 1.2rem; margin-right: 1.2rem;" >
                                 		 <div class="col">
                                           <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Bateria</span>
 											 </div>
 												 <input type="text" name="Bateria"  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['Bateria']; ?>">
									     </div>
									   </div>
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">% Bateria</span>
 											 </div>
 												 <input type="text" name="BateriaPorcentaje"  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['BateriaPorcentaje']; ?>">
									     </div>
									   </div>                                      
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Parlante Front.</span>
 											 </div>
 												 <input type="text" name="ParlanteFrontal"  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['ParlanteFrontal']; ?>">
									     </div>
									   </div>
                                    	 <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Parlante Tras.</span>
 											 </div>
 												 <input type="text"  name="ParlanteTrasero" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['ParlanteTrasero']; ?>">
									     </div>
									   </div>
                                
                                
                                </div>
                                <div class="row"style="margin-left: 1.2rem; margin-right: 1.2rem;" >
                                 		 <div class="col">
                                           <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Carcasa</span>
 											 </div>
 												 <input type="text"  name="Carcasa" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['Carcasa']; ?>">
									     </div>
									   </div>
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Auriculares</span>
 											 </div>
 												 <input type="text" name="Auriculares"  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['Auriculares']; ?>">
									     </div>
									   </div>                                      
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Camara Del.</span>
 											 </div>
 												 <input type="text" name="CamaraDelantera"  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['CamaraDelantera']; ?>">
									     </div>
									   </div>
                                    	 <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Camara Tras.</span>
 											 </div>
 												 <input type="text" name="CamaraTrasera"  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['CamaraTrasera']; ?>">
									     </div>
									   </div>
                                
                                
                                </div> 
                                <div class="row"style="margin-left: 1.2rem; margin-right: 1.2rem;" >
                                 		 <div class="col">
                                           <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Sensor Prox.</span>
 											 </div>
 												 <input type="text"  name="SensorProx" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['SensorProx']; ?>">
									     </div>
									   </div>
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Wi-Fi</span>
 											 </div>
 												 <input type="text" name="Wifi"class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['Wifi']; ?>">
									     </div>
									   </div>                                      
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Bluetooth</span>
 											 </div>
 												 <input type="text" name="Bluetooth" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['Bluetooth']; ?>">
									     </div>
									   </div>
                                    	 <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Liberar</span>
 											 </div>
 												 <input type="text" name="Liberar" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['Liberar']; ?>">
									     </div>
									   </div>
                                
                                
                                </div>
                                <div class="row"style="margin-left: 1.2rem; margin-right: 1.2rem;" >
                                 		 <div class="col">
                                           <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Porta SIM</span>
 											 </div>
 												 <input type="text" name="PortaSim" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['PortaSim']; ?>">
									     </div>
									   </div>
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Microfono</span>
 											 </div>
 												 <input type="text" name="Microfono" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['Microfono']; ?>">
									     </div>
									   </div>                                      
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Botones</span>
 											 </div>
 												 <input type="text" name="Botones" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['Botones']; ?>">
									     </div>
									   </div>
                                    	 <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Tactil</span>
 											 </div>
 												 <input type="text" name="Tactil" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['Tactil']; ?>">
									     </div>
									   </div>
                                
                                
                                </div>
                                <div class="row"style="margin-left: 1.2rem; margin-right: 1.2rem;" >
                                 		 <div class="col">
                                           <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Vidrio</span>
 											 </div>
 												 <input type="text" name="Vidrio" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['Vidrio']; ?>">
									     </div>
									   </div>
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Modulo</span>
 											 </div>
 												 <input type="text" name="Modulo"  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['Modulo']; ?>">
									     </div>
									   </div>                                      
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Traslucido</span>
 											 </div>
 												 <input type="text" name="Traslucido"  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['Traslucido']; ?>">
									     </div>
									   </div>
                                    	 <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Version</span>
 											 </div>
 												 <input  name="Version" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['version']+=1; ?>">
									     </div>
									   </div>
                                
                                
                                </div>                       
                                <div class="row"style="margin-left: 1.2rem; margin-right: 1.2rem;" >
                                		<div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Revisor</span>
 											 </div>
 												 <input type="text" name="Revisor"  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['Revisor']; ?>">
									     </div>
									   </div>   
                                 		 <div class="col">
                                           <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Pin de Carga</span>
 											 </div>
 												 <input type="text" name="PinCarga" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['PinCarga']; ?>">
									     </div>
									   </div>
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Lugar</span>
 											 </div>
 												 <input type="text" name="Lugar" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['Lugar']; ?>">
									     </div>
									   </div>                                      
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Otros</span>
 											 </div>
 												 <input type="text" name="Otros" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['Otros']; ?>">
									     </div>
									   </div>
                                    	 
                                
                                
                                </div>
                                <div class="modal-footer">
                                   	 <div class="form-group">
                                   
                                    <br>
                                     
                                        <button type="submit" class="btn btn-primary" name="update_item"><span class="glyphicon glyphicon-edit"></span> Editar</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancelar</button>
                                    	</div>
                                	</div>
                                </div>
                            </div>
                        </form>
                    </div>
                         <!-- Modal Editar Registro - FIN -->
                    <?php
                     }
                   ?>
                   
                   
                   </tr>
                  
                   
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
      </div>

        <!-- /.container-fluid -->
        
        
        
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-dark">
        <div class="container my-auto">
          <div class="copyright text-center text-white my-auto">
            <span>Copyright &copy; Ciclat Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Finalizar sesion?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Seleccione "Salir" para cerrar sesion.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-danger" href="cerrarsesion.php">Salir</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="http://18.216.97.211/vendor/jquery/jquery.min.js"></script>
  <script src="http://18.216.97.211/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="http://18.216.97.211/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="http://18.216.97.211/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="http://18.216.97.211/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="http://18.216.97.211/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="http://18.216.97.211/js/demo/datatables-demo.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>

  
  <script>
$(document).ready( function () {

    $('#dataTable1 tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Buscar en '+title+'" />' );
    } );
 
    // DataTable
var table =  $('#dataTable1').DataTable({
    select: {
    	style: 'multi'
    },
   scrollY:400,
    scrollX:true,
    scrollCollapse: true,
    order: [[5, 'desc']],
    lengthMenu:[[10,25,50,-1],[10,25,50,'Todos']],
    pagingType: 'full_numbers'
    	        
    });
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer([6,7,8,9]) ).on( 'keyup change clear', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
    
} );
</script>
  
</div>
  
</body>

</html>
