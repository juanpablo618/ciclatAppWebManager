<?php
session_start();

//include 'conexionmysql/login-user.php';

$varses1 = $_SESSION['usuario'];

//echo $varses1;

if($varses1== null|| $varses1=''){
	
	echo "NO";
	header('Location: http://18.216.97.211/login.php');
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

  <title>Ciclat Web Manager | Emparejamiento</title>

  <!-- Custom fonts for this template-->
  <link href="http://18.216.97.211/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<link rel="icon" href="https://tiendaciclat.com/wp-content/uploads/2020/04/cropped-favicon3-32x32.png" sizes="32x32">

  <!-- Custom styles for this template-->
  <link href="http://18.216.97.211/css/sb-admin-2.min.css" rel="stylesheet">

<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" >
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/css/select.bootstrap4.min.css" >
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />


</head>
<body id="page-top">

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
          <i class="fas fa-fw fa-tachometer-alt"></i>
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
        Funciones
      </div>

      <!-- Nav Item - Charts -->
      <li class="nav-item active">
        <a class="nav-link" href="http://18.216.97.211/charts.php">
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
            <a class="collapse-item" href="http://18.216.97.211/tables3.php" >Ventas</a>
            <a class="collapse-item" href="http://18.216.97.211/eliminados.php" >Eliminados</a>
            <a class="collapse-item" href="http://18.216.97.211/tables2.php" >Todos</a>
          </div>
        </div>
      </li>
   
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="http://18.216.97.211/tables.php">
          <i class="fas fa-fw fa-tasks"></i>
          <span>Tareas</span></a>
      </li>
	
    <!-- Nav Item - Tables -->
      <li class="nav-item ">
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
          <center>
          <!-- DataTales Example -->
          <div class="card shadow mb-4" style="width:60%">
              <center>
            <div class="card-header py-3" style="background-color:#1b1e23 ">
              <h6 class="m-0 font-weight-bold text-primary">Marca y Modelo a Matchear</h6>
            </div>
            </center>
            <div class="card-body bg-dark">
          <div class="table-responsive table-dark" align="center">
            <table id="tablaPrueba" class="table table-striped table-bordered table-dark" style="width:100%">
            <thead>
            <tr>
            
            	<th><center>Marca</center></th>
            	<th><center>Modelo</center></th>
            	<th><center>Accion</center></th>
            </tr>
            </thead>
            <tbody style="background-color:#1b1e23 ">
            </tbody>
            </table>
           </div>            
            </div>
          </div>
 			</center>
        
        <div class="card shadow mb-4 ">
              <center>
            <div class="card-header py-3" style="background-color:#1b1e23 ">
              <h6 class="m-0 font-weight-bold text-primary">Matcheos Encontrados</h6>
            </div>
            </center>
            <div class="card-body bg-dark">
           <div class="table-responsive table-dark">
            <table id="tablaMatcheos" class="table table-bordered table-dark" style="width:100%">
            <thead>
            <tr>
            	<th><center>IMEI</center></th>
            	<th>Riesgo</th>
            	<th>Tiempo</th>
                <th><center>Tarea a Realizar</center></th>
                <th>Accion</th>

            </tr>
            </thead>
            <tbody style="background-color:#1b1e23 ">
            </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>

        </div>
        <!-- /.container-fluid -->
        
        <div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog col-lg-6" role="document">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formUsuarios">    
            <div class="modal-body text-white" >
                <div class="row">
                    <div class="col">
                    
                    <div class="input-group mb-3">
 								 <div class="input-group-prepend">
    								<label class="input-group-text" for="inputGroupSelect02">Marca</label>
  								</div>
  								<select class="custom-select" id="Marca" name="select">
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
                                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-success">Confirmar</button>
            </div>
        </form>    
        </div>
    </div>
</div> 
    
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
    								<label class="input-group-text" for="inputGroupSelect02">Revisor para Asignar</label>
  								</div>
  								<select class="custom-select" id="Revisor" required>
							<option selected="selected" disabled="disabled" value="">--</option>
  							<option value="Benja" >Benja</option>
  							<option value="Felipe">Felipe</option>
  							<option value="Lucrecio">Lucrecio</option>

  							  </select>
  						  </div>
					</div>  
               
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar1" class="btn btn-success">Confirmar</button>
            </div>
        </form>    
        </div>
    </div>
</div> 

      </div>
      <!-- End of Main Content -->
      

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
<script type="text/javascript" src="main.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


</body>

</html>
