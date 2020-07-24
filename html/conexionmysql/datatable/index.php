<!DOCTYPE html>
<?php
session_start();
	/*
if($_SESSION['usuario']!= 'root1'){

session_destroy();
	header("Location: http://18.216.97.211/login.php");
}
*/
$varses1 = $_SESSION['usuario'];
//echo $varses1;
if($varses1== null|| $varses1=''){
	header("Location: http://18.216.97.211/login.php");
	echo "NO";
	die();
}


?>


<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ciclat Web Manager | Repuestos</title>

  <!-- Custom fonts for this template-->
  <link href="http://18.216.97.211/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->


    <!-- Latest compiled and minified CSS -->
    
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
                $('#dataTable').DataTable({
                select: true,
   				scrollY:400,
    			scrollX:true,
                    order: [[1, 'asc']],

    			scrollCollapse: true,
                lengthMenu:[[10,25,50,-1],[10,25,50,'Todos']],
                });
            });

        </script>

  	<link href="http://18.216.97.211/css/sb-admin-2.css" rel="stylesheet">

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" >
	<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/css/select.bootstrap4.min.css" >

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.bootstrap4.min.css"/>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />

</head>

<body onload="myfunction()" id="page-top" bgcolour="#5a5c69">

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
      <li class="nav-item active">
        <a class="nav-link" href="http://18.216.97.211/conexionmysql/datatable/index.php">
          <i class="fas fa-fw fa-tools"></i>
          <span>Repuestos</span></a>
      </li>
    
        <li class="nav-item ">
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

        <div class="container-fluid">
<div class="card shadow mb-4">
	<div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" align="center">Funciones y Herramientas</h6>
            </div>
            <div class="card-body bg-dark">
            <p class="text-white">Aqui se explican las funciones de cada boton para el uso y manjeo de los repuestos en esta tabla.</p>
            <hr>
			<div class="row">

            <!-- Explicacion Boton Info -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h5 text-xs font-weight-bold text-primary text-uppercase mb-1">Boton de informacion</div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800">Mire detalladamente la informacion del repuesto</div>
                    </div>
                    <div class="col-auto">
                            <button type='button' class='btn btn-primary btn-sm'><span class='fas fa-info' aria-hidden='true'></span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Explicacion Boton Editar -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h5 text-xs font-weight-bold text-warning text-uppercase mb-1">Boton Editar</div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800">Edite la informacion del repuesto que desee</div>
                    </div>
                    <div class="col-auto">
                            <button type='button' class='btn btn-warning btn-sm'><span class='fas fa-edit' aria-hidden='true'></span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Explicacion Boton Eliminar -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Boton Eliminar</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800">Elimine repuestos. Verifique que este eliminando el repuesto correcto</div>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-auto">
                            <button type='button' class='btn btn-danger btn-sm'><span class='fas fa-trash' aria-hidden='true'></span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Botones de Descarga</div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800">Use el boton para descargar en Excel</div>
                      <div class="mb-0 small ">(boton de ejemplo)</div>

                    </div>
                    <div class="col-auto">
                            <button type='button' class='btn btn-success btn-sm'><span class='fas fa-file-excel' aria-hidden='true'></span></button>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
	     </div>
     </div>

        <!-- Begin Page Content -->
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" align="center">Tabla de Repuestos</h6>
            </div>
            <div class="card-body bg-dark">
    
          <!-- DataTales Example -->
        
 <div class="table table-dark">
        <div class="dropdown">
            
            <a href="#add" data-toggle="modal">
                <button type='button' class='btn btn-primary btn-sm'><span class='fas fa-plus' aria-hidden='true'></span> Agregar Repuesto</button>
            </a>
        	<a type="button" id="btnDescarga" href="excel.php" >
                <button type='button' id="btnDescarga" class='btn btn-success btn-sm'><span class='fas fa-file-excel' aria-hidden='true'></span> Descargar Excel</button>
            </a>
        	
        </div>
        <br>
        <table id="dataTable" class="table table-dark display"  cellspacing="0" width="100%">
            <thead >
                <tr>
                    <th style="Color: #5A5C69;">ID</th>
                    <th>Modelo</th>
                    <th>Marca</th>
                    <th>Repuesto</th>
                    <th>Color</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th  style="Color: #5A5C69;">ID</th>
                    <th>Modelo</th>
                    <th>Marca</th>
                    <th>Repuesto</th>
                    <th>Color</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </tr>
            </tfoot>
            <tbody>
                <?php 
            	$conn = new mysqli('localhost','root','administrador','inventario');
                    $sql = "SELECT * FROM repuestos";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // Insertar la informacion en cada fila de la tabla
                        while($row = $result->fetch_assoc()) {
                            $id = $row['id'];
                            $item_name = $row['marca'];
                            $item_code = $row['modelo'];
                            $item_category = $row['repuesto'];
                            $item_description = $row['color'];
                            $critical_lvl = $row['cantidad'];

                           
                    ?>
                <tr style="background-color:#1b1e23 ">
                    <td style="color: #1b1e23;">
                        <?php echo $id; ?>
                    </td>
                    <td>
                        <?php echo $item_name; ?>
                    </td>
                    <td>
                        <?php echo $item_code; ?>
                    </td>
                    <td>
                        <?php echo $item_category; ?>
                    </td>
                    <td>
                        <?php echo $item_description; ?>
                    </td>
                    <td>
                        <?php echo $critical_lvl; ?>
                    </td>
                    <td>
                        <a href="#out<?php echo $id;?>" data-toggle="modal">
                            <button type='button' class='btn btn-primary btn-sm'><span class='fas fa-info' aria-hidden='true'></span></button>
                        </a>
                        
                        <a href="#edit<?php echo $id;?>" data-toggle="modal">
                            <button type='button' class='btn btn-warning btn-sm'><span class='fas fa-edit' aria-hidden='true'></span></button>
                        </a>
                        <a href="#delete<?php echo $id;?>" data-toggle="modal">
                            <button type='button' class='btn btn-danger btn-sm'><span class='fas fa-trash' aria-hidden='true'></span></button>
                        </a>
                    </td>
                    <!--Info Modal -->
                    <div id="out<?php echo $id; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <form method="post" class="form-horizontal" role="form">
                                <!-- Modal content-->
                                <div class="modal-content bg-dark">
                                    <div class="modal-header">
                                             <h4 class="modal-title text-white">Informacion</h4>
											<button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                    
                                        <div class="form-group">
                                            <label class="control-label col-sm-2 text-white" for="item_name">Marca:</label>
                                            <div class="col-sm-12">
                                                <input type="hidden" name="minus_stocks_id" value="<?php echo $id; ?>">
                                                <input type="text" class="form-control" id="item_name" name="item_name" placeholder="Item Name" required readonly value="<?php echo $item_name; ?>"> </div>
                                            <label class="control-label col-sm-4 text-white" for="item_code">Modelo:</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="item_code" name="item_code" placeholder="Item Code" required readonly value="<?php echo $item_code; ?>"> </div>
                                            <br>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2 text-white" for="item_category">Repuesto:</label>
                                            <div class="col-sm-12">
                                                <p class="form-control" readonly id="remarks" name="remarks" ><?php echo $item_category;?></p> </div>
                                            <label class="control-label col-sm-2 text-white" for="received_by" data-toggle="tooltip" title="Unit of Measurement">Cantidad:</label>
                                            <div class="col-sm-5">
                                                 <p class="form-control" readonly id="remarks" name="remarks" ><?php echo $critical_lvl;?></p> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2 text-white" for="item_name">Color:</label>
                                            <div class="col-sm-5">
                                                <p class="form-control" readonly id="remarks" name="remarks" ><?php echo $item_description;?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cerrar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <!--Edit Item Modal -->
                    <div id="edit<?php echo $id; ?>" class="modal fade" role="dialog">
                        <form method="post" class="form-horizontal" role="form">
                            <div class="modal-dialog modal-lg">
                                <!-- Modal content-->
                                <div class="modal-content bg-dark">
                                    <div class="modal-header">
                                      <h4 class="modal-title text-white">Editar Repuesto</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="row">
                                        <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
                        				<div class="form-group col-sm-12">
                                            <label class="control-label col-sm-4 text-white" for="item_name">Marca:</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control col-sm-12" id="item_name" name="item_name" value="<?php echo $item_name; ?>" placeholder="Item Name" required autofocus>
                                        	</div>
                                            <label class="control-label col-sm-2 text-white" for="item_code">Modelo:</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control col-sm-12" id="item_code" name="item_code" value="<?php echo $item_code; ?>" placeholder="Item Code" required> 
                                        	</div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            
                                            <label class="control-label col-sm-2 text-white" for="item_category">Repuesto:</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control col-sm-12" id="item_category" name="item_category" value="<?php echo $item_category; ?>" placeholder="Category" required> 
                                        </div>
                                        <label class="control-label col-sm-2 text-white" for="item_description">Color:</label>
                                            <div class="col-sm-5">
                                                <input  class="form-control" id="item_description" name="item_description" placeholder="Repuesto..." required style="width: 100%;" value="<?php echo $item_description; ?>">                                                          
                                            </div>
                                        </div>
                                    <div class="form-group col-sm-12">
                                           
                                            <label class="control-label col-sm-2 text-white" for="item_category">Cantidad:</label>
                                            <div class="col-sm-5">
                                                <input type="number" class="form-control" id="critical_lvl" name="critical_lvl" value="<?php echo $critical_lvl; ?>" placeholder="Category" required> </div>
                                        </div>
                                    </div>
                                <br>
                                <br>
                                <br>

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
                    <!--Delete Modal -->
                    <div id="delete<?php echo $id; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <form method="post">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Eliminar</h4>
                                        
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="delete_id" value="<?php echo $id; ?>">
                                        <div class="alert alert-danger">Seguro que desea eliminar el repuesto para  <strong>
                                                <?php echo $item_code; ?> ?</strong> </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Si, eliminar</button>
                                            <button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span>  NO</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </tr>
                <?php
                        }



                        //Update Items
                        if(isset($_POST['update_item'])){
                            $edit_item_id = $_POST['id'];
                            $item_name = $_POST['item_name'];
                        $item_code = $_POST['item_code'];
                        $item_category = $_POST['item_category'];
                        $item_description = $_POST['item_description'];
                        $item_critical_lvl = $_POST['critical_lvl'];

                        $sql = "UPDATE repuestos SET 
                                marca='$item_name',
                                modelo='$item_code',
                                repuesto='$item_category',
                                color='$item_description',
                                cantidad='$item_critical_lvl'
                                WHERE id='$edit_item_id' ";
                            if ($conn->query($sql) === TRUE) {
                                echo '<script>window.location.href="index.php"</script>';
                            } else {
                                echo "Error al actualizar Repuesto: " . $conn->error;
                            }
                        }

                        if(isset($_POST['delete'])){
                            // sql to delete a record
                            $delete_id = $_POST['delete_id'];
                            $sql = "DELETE FROM repuestos WHERE id='$delete_id' ";
                            if ($conn->query($sql) === TRUE) {
                                                                    echo '<script>window.location.href="index.php"</script>';

                            } else {
                                echo "Error al borrar repuesto: " . $conn->error;
                            }
                        }
                    }

                    //Add Item        
                    if(isset($_POST['add_item'])){
                        $item_name = $_POST['item_name'];
                        $item_code = $_POST['item_code'];
                        $item_category = $_POST['item_category'];
                        $item_description = $_POST['item_description'];
                        $item_critical_lvl = $_POST['critical_lvl'];
                        $sql = "INSERT INTO repuestos (marca,modelo,repuesto,color,cantidad)VALUES ('$item_name','$item_code','$item_category','$item_description','$item_critical_lvl')";
                        if ($conn->query($sql) === TRUE) {

                         echo '<script>window.location.href="index.php"</script>';

                        } else {
                            echo "Error al agregar repuesto: " . $sql . "<br>" . $conn->error;
                        }
                    }
?>
            </tbody>
        </table>
    </div>
        
    <!--Add Item Modal -->
    <div id="add" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content bg-dark">
                <form method="post" class="form-horizontal" role="form">
                    <div class="modal-header">
                        <h4 class="modal-title text-white">Nuevo Repuesto</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                    </div>
                    <div class="modal-body">
                        <div class="form-group col-sm-12">
                            <label class="control-label col-sm-2 text-white" for="item_name">Marca:</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="item_name" name="item_name" placeholder="Marca..." autocomplete="off" autofocus required> </div>
                        
                            <label class="control-label col-sm-2 text-white" for="item_code">Modelo:</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="item_code" name="item_code" placeholder="Modelo..." autocomplete="off" required> </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2 text-white" for="item_category">Repuesto:</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="item_category" name="item_category" placeholder="Nombre de repuesto..." autocomplete="off" required> 
                        </div>
                        <br>
                            <label class="control-label col-sm-2 text-white" for="item_critical_lvl">Cantidad:</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="critical_lvl" name="critical_lvl" autocomplete="off" required> </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2 text-white" for="item_sub_category">Color:</label>
                            <div class="col-sm-4">
                                <input class="form-control" id="item_description" name="item_description" autocomplete="off" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" name="add_item"><span class="glyphicon glyphicon-plus"></span> Agregar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
      </div>

        <!-- /.container-fluid -->
        
        
        
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
  
 
  <br>
  <!-- Footer -->
      <footer class="sticky-footer bg-dark">
        <div class="container my-auto">
          <div class="copyright text-center text-white my-auto">
            <span>Copyright &copy; Ciclat Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

</body>


<!-- Bootstrap core JavaScript-->
  <script src="http://18.216.97.211/vendor/jquery/jquery.min.js"></script>
  <script src="http://18.216.97.211/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="http://18.216.97.211/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="http://18.216.97.211/js/sb-admin-2.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  

<!-- Page level plugins -->

<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
$(document).ready(function(){
	$('#btnDescarga').click(function(){
		toastr["success"]("Su archivo de Excel con los repuestos esta listo.", "<strong>Descargando...</strong>");	
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
</html>
