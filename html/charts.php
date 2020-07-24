<?php
session_start();

//include 'conexionmysql/login-user.php';

$varses1 = $_SESSION['usuario'];

//echo $varses1;
/*
if($varses1== null|| $varses1=''){
	
	echo "NO";
	header('Location: login.php');
}*/
//include 'conexionmysql/sesiones.php';
?>


<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ciclat Web Manager | Emparejamiento</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

<link rel="icon" href="https://tiendaciclat.com/wp-content/uploads/2020/04/cropped-favicon3-32x32.png" sizes="32x32">

<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" >
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/css/select.bootstrap4.min.css" >

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/colreorder/1.5.2/css/colReorder.dataTables.min.css" />

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.21/b-1.6.2/b-html5-1.6.2/b-print-1.6.2/datatables.min.css"/>

</head>
<body id="page-top">

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
      <li class="nav-item active">
        <a class="nav-link" href="charts.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Match</span></a>
      </li>

      <!-- Nav Item - Tablas y Registros -->
    <li class="nav-item ">
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

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

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
                <span class="mr-2 d-none d-lg-inline text-white-600 medium"> <?php echo $_SESSION['usuario']?></span>
                <img class="img-profile rounded-circle" src="http://18.216.97.211/<?php echo $_SESSION['Avatar'] ?>" size=60x60>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Ajustes
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
          
              <h1 class="h3 mb-2 text-gray-800">Matcheos - Tareas a realizar</h1>
        <hr>
        
          <!-- Asignar Matcheo -->
        <div class="card shadow mb-4">
              <center>
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Asignar Nuevo Matcheo</h6>
            </div>
            </center>
            <div class="card-body bg-dark">
            <center>
            <a href="http://18.216.97.211/conexionmysql/ajax/prueba.php" class="btn btn-success">Nuevo Matcheo!</a>
            </center>   
            </div>
          </div>
        
          <!-- DataTales por Revisor -->
          <div class="card shadow mb-4">
              <center>
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tareas asignadas a Revisores</h6>
            </div>
            </center>
            <div class="card-body bg-dark">
            <section id="tabs" class="project-tab">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav bg-dark nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Benjamin</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Felipe</a>
                                <a class="nav-item nav-link " id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Lucrecio</a>
                            </div>
                        </nav>
                        <div class="tab-content bg-dark" id="nav-tabContent">
                            <div class="tab-pane bg-dark fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <br>
                            <div class="table-dark" >
			<table class="table table-dark table-bordered table-responsive display" width="100%" id="tablaBenja" cellspacing="0">
                  <thead >
                    
                    <tr>
                     
                      <th class="m-0 font-weight-bold  ">IMEI</th>
                      <th class="m-0 font-weight-bold  ">Riesgo</th>
                      <th class="m-0 font-weight-bold  ">Tiempo</th>
                      <th class="m-0 font-weight-bold  ">Tarea / Reparacion</th>
                      <th class="m-0 font-weight-bold  ">Revisor</th>
                      <th class="m-0 font-weight-bold  ">Accion</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                     <th class="m-0 font-weight-bold  ">IMEI</th>
                      <th class="m-0 font-weight-bold  ">Riesgo</th>
                      <th class="m-0 font-weight-bold  ">Tiempo</th>
                      <th class="m-0 font-weight-bold  ">Tarea / Reparacion</th>
                      <th class="m-0 font-weight-bold  ">Revisor</th>
                      <th class="m-0 font-weight-bold  ">Accion</th>
                      
                    </tr>
                  </tfoot>
                  <tbody style="background-color:#1b1e23 ">
                   
                  
                  </tbody>
                </table>

                            </div>
                            </div>
                            <div class="tab-pane bg-dark fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <br>
                                                        <div class="table-dark" >

                <table class="table table-dark table-bordered table-responsive display" style="width:100%" id="tablaFelipe" cellspacing="0">
                 <thead >
                    
                    <tr>
                     
                      <th class="m-0 font-weight-bold  ">IMEI</th>
                      <th class="m-0 font-weight-bold  ">Riesgo</th>
                      <th class="m-0 font-weight-bold  ">Tiempo</th>
                      <th class="m-0 font-weight-bold  ">Tarea / Reparacion</th>
                      <th class="m-0 font-weight-bold  ">Revisor</th>
                      <th class="m-0 font-weight-bold  ">Accion</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      
                      <th class="m-0 font-weight-bold  ">IMEI</th>
                      <th class="m-0 font-weight-bold  ">Riesgo</th>
                      <th class="m-0 font-weight-bold  ">Tiempo</th>
                      <th class="m-0 font-weight-bold  ">Tarea / Reparacion</th>
                      <th class="m-0 font-weight-bold  ">Revisor</th>
                      <th class="m-0 font-weight-bold  ">Accion</th>
                      
                    </tr>
                  </tfoot>
                  <tbody style="background-color:#1b1e23 ">
                   
                  
                  </tbody>
                </table>
              </div>
             </div>
             
          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
          <br>
          <div class="table-dark" >
              <table class="table table-dark table-bordered table-responsive display" width="100%" id="tablaLucre" cellspacing="0">
                 <thead >
                    
                    <tr>
                     
                      <th class="m-0 font-weight-bold  ">IMEI</th>
                      <th class="m-0 font-weight-bold  ">Riesgo</th>
                      <th class="m-0 font-weight-bold  ">Tiempo</th>
                      <th class="m-0 font-weight-bold  ">Tarea / Reparacion</th>
                      <th class="m-0 font-weight-bold  ">Revisor</th>
                      <th class="m-0 font-weight-bold  ">Accion</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      
                      <th class="m-0 font-weight-bold  ">IMEI</th>
                      <th class="m-0 font-weight-bold  ">Riesgo</th>
                      <th class="m-0 font-weight-bold  ">Tiempo</th>
                      <th class="m-0 font-weight-bold  ">Tarea / Reparacion</th>
                      <th class="m-0 font-weight-bold  ">Revisor</th>
                      <th class="m-0 font-weight-bold  ">Accion</th>
                      
                      
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
            </div>
        </section>           
            
           
            </div>
          </div>

        </div>

        </div>
        <!-- /.container-fluid -->
        
        

      </div>
      <!-- End of Main Content -->
      

    </div>
    <!-- End of Content Wrapper -->

  <!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  
 <div class="modal fade" id="modalCRUD2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog col-lg-6" role="document">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formUsuarios1">    
            <div class="modal-body text-white" >
               <div class="row">
                    <div class="col">
                    <div class="input-group mb-3">
  						<div class="input-group-prepend">
    						<span class="input-group-text" id="basic-addon3">IMEI</span>
  						</div>
  							<input type="text" class="form-control" id="IMEI" aria-describedby="basic-addon3">
						</div>
                    </div>    
                </div>
           	   <div class="row">
                    <div class="col">
                    <div class="input-group mb-3">
  						<div class="input-group-prepend">
    						<span class="input-group-text" id="basic-addon3">Riesgo</span>
  						</div>
  							<input type="text" class="form-control" id="Riesgo" aria-describedby="basic-addon3">
						</div>
                    </div>    
                </div>
               <div class="row">
                    <div class="col">
                    <div class="input-group mb-3">
  						<div class="input-group-prepend">
    						<span class="input-group-text" id="basic-addon3">Tiempo</span>
  						</div>
  							<input type="text" class="form-control" id="Tiempo" aria-describedby="basic-addon3">
						</div>
                    </div>    
                </div>
               <div class="row">
                    <div class="col">
                    <div class="input-group mb-3">
 							 <div class="input-group-prepend">
   								 <span class="input-group-text" id="inputGroup-sizing-default6">Descripcion</span>
  							</div>
                    <textarea type="text" class="form-control" id="Descripcion" rows="8" readonly></textarea>
						  </div>
                    </div>    
                </div>
               <div class="row">
                    <div class="col">
                    
                   <div class="input-group mb-3">
  						<div class="input-group-prepend">
    						<span class="input-group-text" id="basic-addon">Revisor Asignado</span>
  						</div>
  							<input type="text" class="form-control" id="Revisor" aria-describedby="basic-addon">
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
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="http://18.216.97.211/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <!-- Core plugin JavaScript-->
  <script src="http://18.216.97.211/vendor/jquery-easing/jquery.easing.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
<!-- Page level plugins -->

<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.21/b-1.6.2/b-html5-1.6.2/b-print-1.6.2/datatables.min.js"></script>


<script type="text/javascript" src="conexionmysql/tareasRevisores/main.js"></script>

</body>

</html>
