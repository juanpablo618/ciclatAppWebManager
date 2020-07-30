<?php
session_start();
	session_destroy();

$varE=$_REQUEST['sn'];


?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Iniciar Sesion">
  <meta name="author" content="">

  <title>Ciclat Web Manager - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
<link rel="icon" href="https://tiendaciclat.com/wp-content/uploads/2020/04/cropped-favicon3-32x32.png" sizes="32x32">

<script>
if(<?php echo $varE; ?> === 1){
	alert('Error! A problem has been occurred while submitting your data.');
}
</script>

</head>

<body class="bg-gradient-dark">




  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-imag"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h2 text-gray-900 mb-5">Bienvenido a Ciclat!</h1>
                  <h1 class="h4 text-gray-900 mb-3">Inicie sesion para usar las funciones.</h1>
                  </div>
                <hr>
                  <form class="user" method="POST" action="http://localhost/ciclatAppWebManager/html/conexionmysql/login-user.php">
                    <div class="form-group">
                      <input type="user" REQUIRED autofocus name="usuario" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Usuario...">
                    </div>
                    <div class="form-group">
                      <input type="password" REQUIRED name="pass" class="form-control form-control-user" id="exampleInputPassword" placeholder="Contraseña...">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Recordarme</label>
                      </div>
                    </div>
                    <input type="submit" class="btn btn-success btn-user btn-block" value="Ingresar" />
                     
                  </form>
                  <hr>
                

                	<hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Olvide la contraseña?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.php">Crear una cuenta!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-erasing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
