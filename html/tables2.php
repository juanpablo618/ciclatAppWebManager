<?php
session_start();
date_default_timezone_set('America/Argentina/Buenos_Aires');

$varses1 = $_SESSION['usuario'];

//echo $varses1;

if($varses1== null|| $varses1=''){
	
	echo "NO";
	header('Location: login.php');
}
//include 'conexionmysql/sesiones.php';
?>


<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ciclat Web Manager | Registros</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">
<link rel="icon" href="https://tiendaciclat.com/wp-content/uploads/2020/04/cropped-favicon3-32x32.png" sizes="32x32">


<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" >
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/css/select.bootstrap4.min.css" >


 
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />


</head>

<body id="page-top" bgcolour="#5a5c69">

<script>
function myFunc(){
	$('.modal-backdrop').remove();
	$('body').css('paddingRight', 0);
};
</script>
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
      <li class="nav-item">
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
            <h6 class="collapse-header">Desarrollo:</h6>
            <a class="collapse-item" href="http://18.216.97.211:10000/">WebMin</a>
            <a class="collapse-item" href="http://18.216.97.211/phpMyAdmin">phpMyAdmin</a>
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
        Addons
      </div>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Match</span></a>
      </li>

      <!-- Nav Item - Tablas y Registros -->
    <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="true" aria-controls="collapseTwo1">
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
    
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.php">
          <i class="fas fa-fw fa-tasks"></i>
          <span>Tareas</span></a>
      </li>
	  
    <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="http://18.216.97.211/conexionmysql/datatable/index.php">
          <i class="fas fa-fw fa-tools"></i>
          <span>Repuestos</span></a>
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
        <nav class="navbar navbar-expand navbar-light bg-gradient-primary topbar mb-4 static-top shadow">

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

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-white-600 medium"><?php echo $_SESSION['usuario']; ?></span>
                <img class="img-profile rounded-circle" src="http://18.216.97.211/<?php echo $_SESSION['Avatar'] ?>" size=60x60>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
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
          <h1 class="h3 mb-2 text-gray-800">Registros</h1>
          <p class="mb-4">Esta es una tabla real. Los resultados que se muestran en esta tabla son validos y estan actualizados.</p>
		  <hr>
			<div class="alert alert-warning " role="alert">
            <h4 class="alert-heading">Aguarde mientras se cargan los datos de la tabla!</h4>
            
            <div class="row">
            	<div class="col" >
                
                				Esto puede demorar entre 1 a 3 minutos.
            	</div>
            <div class="col" align="center">
            <center>
              <div class="spinner-border ml-auto" role="status" aria-hidden="true"  align="center"></div>
			</center>
            	</div>
            </div>
        	</div>
    
    		
    
          <!-- DataTales Example -->
          <div class="card shadow mb-4" id="tarjeta1" style="display:none">
            <div class="card-header py-3" align="center" style="background-color:#1b1e23 ">
              <h6 class="m-1 font-weight-bold text-primary" >Tabla de Registros</h6>
            </div>
            <div class="card-body bg-dark">
            
       <div class="table-responsive table-dark">
       
              <div class="dropdown">
            
            
                <a type='button' id="btnAdd" class='btn btn-primary btn-sm btnAdd'><span class='fas fa-plus' aria-hidden='true'></span> Agregar Registro</a>
        	<a type="button" id="btnDescarga" href="http://18.216.97.211/conexionmysql/excel.php" >
                <button type='button' id="btnDescarga" class='btn btn-success btn-sm'><span class='fas fa-file-excel' aria-hidden='true'></span> Descargar Excel</button>
            </a>
        	<a type='button' id="btnUpdate" class='btn btn-warning btn-sm btnUpdate'><span class='fas fa-sync-alt' aria-hidden='true'></span> Actualizar Tabla</a>

        </div>
        <br>
       
                <table class="table table-responsive table-hover table-bordered table-dark table-layout:fixed" id="tablaRegistros" cellspacing="0">
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
                      <th class="m-0 font-weight-bold text-white">ParlanteTrasero</th>
                      <th class="m-0 font-weight-bold text-white">SensorProx</th>
                      <th class="m-0 font-weight-bold text-white">Bateria</th>
                      <th class="m-0 font-weight-bold text-white">BateriaPorcentaje</th>
                      <th class="m-0 font-weight-bold text-white">Wifi</th>
                      <th class="m-0 font-weight-bold text-white">Bluetooth</th>
                      <th class="m-0 font-weight-bold text-white">Vidrio</th>
                      <th class="m-0 font-weight-bold text-white">Modulo</th>
                      <th class="m-0 font-weight-bold text-white">Traslucido</th>
                      <th class="m-0 font-weight-bold text-white">Otros</th>
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
                      <th>ACCIONES</th>
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
                      <th>ParlanteTrasero</th>
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
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          </div>

        </div>
      

      										
        <!-- /.container-fluid -->

      <!-- Modal Agregar Registro - INICIO -->
    

      
      <!-- Modal Agregar Registro - FIN -->

<div id="modalCRUD" class="modal fade" role="dialog">                      
                            <div class="modal-dialog modal-lg">
                                <!-- Modal content-->
                                <div class="modal-content bg-dark">
                                    <div class="modal-header">
                                      <h4 class="modal-title text-white">Editar Registro</h4>
                                        <button type="button" class="close" data-dismiss="modal" onClick="myFunc()">&times;</button>
                                   </div>
                                <form id="formUsuarios">    
            	<div class="modal-body"  >
                                <div class="row" style="margin-left: 1.2rem; margin-right: 1.2rem;" >
                                <div class="col">
                                           <div id="divID" class="input-group input-group-sm mb-3 divID">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">ID</span>
 											 </div>
 												 <input type="text" id="ID" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
									     </div>
                                	 </div>
                                 <div class="col">
                                           <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">IMEI</span>
 											 </div>
 												 <input type="text" id="IMEI"  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
									     </div>
									   </div>
                                </div>
								<div class="row"style="margin-left: 1.2rem; margin-right: 1.2rem;" >
                                
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Marca</span>
 											 </div>
												<select class="custom-select" id="Marca" required>
													 <option selected="selected" disabled="disabled" value="">--</option>
                                                	<option value="Samsung" >Samsung</option>
  													<option value="Apple">Apple</option>
  													<option value="Motorola">Motorola</option>
  													<option value="Huawei">Huawei</option>
  													<option value="LG">LG</option>
  													<option value="Sony">Sony</option>
  													<option value="Nokia">Nokia</option>
  													<option value="Alcatel">Alcatel</option>
  													<option value="Microsoft">Microsoft</option>
  							  					</select>
                                         </div>
									   </div>                                      
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Modelo</span>
 											 </div>
 												 <input type="text" id="Modelo"  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
									     </div>
									   </div>
                                    	 <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Color</span>
 											 </div>
 												 <input type="text"  id="Color" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
									     </div>
									   </div>
                                
                                
                                </div>
            <div id="modalDIV">
								<div class="row"style="margin-left: 1.2rem; margin-right: 1.2rem;" >
                                 		 <div class="col">
                                           <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Fecha</span>
 											 </div>
 												 <input type="text" id="Fecha"  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo date('Y-m-d'); ?>">
									     </div>
									   </div>
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Estado</span>
 											 </div>
												<select id="Estado" class="browser-default custom-select" required>
													 <option selected="selected" disabled="disabled" value="">--</option>
  													 <option value="Reparar">Reparar</option>
												     <option value="Listo para Vender">Listo para Vender</option>
  													 <option value="Vendido">Vendido</option>
  													 <option value="Repuesto">Repuesto</option>
  													 <option value="Liberar">Liberar</option>
												</select>
                                         </div>
									   </div>                                      
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">GB</span>
 											 </div>
												<select id="GB" class="browser-default custom-select" required>
													 <option selected="selected" disabled="disabled" value="">--</option>
  													 <option value="8">8</option>
												     <option value="16">16</option>
  													 <option value="32">32</option>
  													 <option value="64">64</option>
  													 <option value="128">128</option>
												</select>
                                         </div>
									   </div>
                                    	 <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Estetica</span>
 											 </div>
												<select id="Estetica" class="browser-default custom-select" required>
													 <option selected="selected" disabled="disabled" value="">--</option>
  													 <option value="A">A</option>
												     <option value="B">B</option>
  													 <option value="C">C</option>
  													 
												</select>
                                         </div>
									   </div>
                                
                                
                                </div>
                                <div class="row"style="margin-left: 1.2rem; margin-right: 1.2rem;" >
                                 		 <div class="col">
                                           <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Bateria</span>
 											 </div>
												<select id="Bateria" class="browser-default custom-select" required>
													 <option selected="selected" disabled="disabled" value="">--</option>
  													 <option value="-">OK</option>
												     <option value="X">NO</option>
  													 
												</select>
                                         </div>
									   </div>
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">% Bateria</span>
 											 </div>
 												 <input type="text" id="BateriaPorcentaje"  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['BateriaPorcentaje']; ?>">
									     </div>
									   </div>                                      
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Parlante Front.</span>
 											 </div>
 												 <input type="text" id="ParlanteFrontal"  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['ParlanteFrontal']; ?>">
									     </div>
									   </div>
                                    	 <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Parlante Tras.</span>
 											 </div>
 												 <input type="text"  id="ParlanteTrasero" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['ParlanteTrasero']; ?>">
									     </div>
									   </div>
                                
                                
                                </div>
                                <div class="row"style="margin-left: 1.2rem; margin-right: 1.2rem;" >
                                 		 <div class="col">
                                           <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Carcasa</span>
 											 </div>
 												 <input type="text"  id="Carcasa" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['Carcasa']; ?>">
									     </div>
									   </div>
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Auriculares</span>
 											 </div>
 												 <input type="text" id="Auriculares"  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['Auriculares']; ?>">
									     </div>
									   </div>                                      
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Camara Del.</span>
 											 </div>
 												 <input type="text" id="CamaraDelantera"  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['CamaraDelantera']; ?>">
									     </div>
									   </div>
                                    	 <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Camara Tras.</span>
 											 </div>
 												 <input type="text" id="CamaraTrasera"  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['CamaraTrasera']; ?>">
									     </div>
									   </div>
                                
                                
                                </div> 
                                <div class="row"style="margin-left: 1.2rem; margin-right: 1.2rem;" >
                                 		 <div class="col">
                                           <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Sensor Prox.</span>
 											 </div>
 												 <input type="text"  id="SensorProx" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['SensorProx']; ?>">
									     </div>
									   </div>
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Wi-Fi</span>
 											 </div>
 												 <input type="text" id="Wifi"class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['Wifi']; ?>">
									     </div>
									   </div>                                      
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Bluetooth</span>
 											 </div>
 												 <input type="text" id="Bluetooth" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['Bluetooth']; ?>">
									     </div>
									   </div>
                                    	 <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Liberar</span>
 											 </div>
 												 <input type="text" id="Liberar" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['Liberar']; ?>">
									     </div>
									   </div>
                                
                                
                                </div>
                                <div class="row"style="margin-left: 1.2rem; margin-right: 1.2rem;" >
                                 		 <div class="col">
                                           <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Porta SIM</span>
 											 </div>
 												 <input type="text" id="PortaSim" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['PortaSim']; ?>">
									     </div>
									   </div>
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Microfono</span>
 											 </div>
 												 <input type="text" id="Microfono" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['Microfono']; ?>">
									     </div>
									   </div>                                      
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Botones</span>
 											 </div>
 												 <input type="text" id="Botones" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['Botones']; ?>">
									     </div>
									   </div>
                                    	 <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Tactil</span>
 											 </div>
 												 <input type="text" id="Tactil" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $row['Tactil']; ?>">
									     </div>
									   </div>
                                
                                
                                </div>
                                <div class="row"style="margin-left: 1.2rem; margin-right: 1.2rem;" >
                                 		 <div class="col">
                                           <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Vidrio</span>
 											 </div>
												<select id="Vidrio" class="browser-default custom-select" required>
													 <option selected="selected" disabled="disabled" value="">--</option>
  													 <option value="OK">OK</option>
												     <option value="A">A</option>
  													 <option value="B">B</option>
  													 <option value="NO">NO</option>
												</select>
                                         </div>
									   </div>
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Modulo</span>
 											 </div>
												<select id="Modulo" class="browser-default custom-select" required>
													 <option selected="selected" disabled="disabled" value="">--</option>
  													 <option value="OK">OK</option>
												     <option value="A">A</option>
  													 <option value="B">B</option>
  													 <option value="C">C</option>
  													 <option value="NO">NO</option>
												</select>
                                         </div>
									   </div>                                      
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Traslucido</span>
 											 </div>
												<select id="Traslucido" class="browser-default custom-select" required>
													 <option selected="selected" disabled="disabled" value="">--</option>
												     <option value="A">A</option>
  													 <option value="B">B</option>
  													 <option value="C">C</option>
  													 <option value="D">D</option>
												</select>
                                         </div>
									   </div>
                                    	 <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Version</span>
 											 </div>
 												 <input  id="version" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="1">
									     </div>
									   </div>
                                
                                
                                </div>                       
                                <div class="row"style="margin-left: 1.2rem; margin-right: 1.2rem;" >
                                		<div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Revisor</span>
 											 </div>
												<select id="Revisor" class="browser-default custom-select" required>
													 <option selected="selected" disabled="disabled" value="">--</option>
                                                	 <option value="Facundo">Facundo</option>
												     <option value="Benjamin">Benjamin</option>
  													 <option value="Felipe">Felipe</option>
  													 <option value="Lucrecio">Lucrecio</option>
												</select>
                                        </div>
									   </div>   
                                 		 <div class="col">
                                           <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Pin de Carga</span>
 											 </div>
 												 <input type="text" id="PinCarga" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" >
									     </div>
									   </div>
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Lugar</span>
 											 </div>
 												 <input type="text" id="Lugar" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" >
									     </div>
									   </div>                                      
                                         <div class="col">
                                         <div class="input-group input-group-sm mb-3">
 											 <div class="input-group-prepend">
   												 <span class="input-group-text" id="inputGroup-sizing-sm">Otros</span>
 											 </div>
 												 <input type="text" id="Otros" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" >
									     </div>
									   </div>
                                    	 
                                
                                
                                </div>
            </div>
                      </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" onClick="myFunc()">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-success">Confirmar</button>
            </div>
                       

                                </form>
                                </div>
                            </div>
                        
                    </div>
        
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Ciclat Website 2020</span>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
<!-- Page level plugins -->

<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" ></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript" src="http://18.216.97.211/conexionmysql/ajaxRegistros/main.js"></script>


<script>
$(document).ready( function () {
	
	$(".alert").alert('close')

	$('#tarjeta1').css('display', 'block');


toastr["info"]("Los datos de la tabla y sus funciones estan listas para usarse", "Datos Cargados")

toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": true,
  "progressBar": true,
  "positionClass": "toast-bottom-left",
  "preventDuplicates": true,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
} );
</script>

</body>


<script>
$(document).ready(function(){
	$('#btnDescarga').click(function(){
		toastr["success"]("Recuerde modificar la columna IMEI con la opcion <strong>Formato de celdas</strong>", "<strong>Descargando...</strong>");	
    });
toastr.options = {
  "closeButton": false,
  "debug": true,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-bottom-left",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "7000",
  "extendedTimeOut": "5000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
});
</script>

<script>
setInterval("my_function();",20000); 
 
    function my_function(){
			  tablaRegistros.ajax.reload(null, false);
              toastr["warning"]("La tabla se esta actualizando...", "<strong>Aguarde unos instantes</strong>");	    
    };
</script>


</html>

