
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Comedor Panza Llena | Registrarse</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-dark">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
<div class="col d-none d-lg-block" align="center">
         <br>
            	<img src="https://scontent.fcor2-1.fna.fbcdn.net/v/t1.0-9/41832519_674686646248019_5292778285799833600_n.jpg?_nc_cat=101&_nc_sid=85a577&_nc_ohc=9KjRAJ0xKrYAX-d-_lW&_nc_ht=scontent.fcor2-1.fna&oh=f7263dfd78c501058526c1d61df19130&oe=5F2A7CC1" alt="Girl in a jacket" width="300" height="300">
            </div>
        	<div class="col">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Crea tu Cuenta!</h1>
              </div>
              <form class="user" method="POST" action="http://18.216.97.211/Otros/nuevoMiembro.php">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="usuario" REQUIRED class="form-control form-control-user" id="exampleFirstName" placeholder="Nombre de Usuario">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="pass" REQUIRED class="form-control form-control-user" id="exampleInputPassword" placeholder="Contraseña">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" name="pass-2" REQUIRED class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repetir Contraseña">
                  </div>
                </div>
                      
              <!-- Button trigger modal -->
<input type="button" class="btn btn-success btn-user btn-block" data-toggle="modal" data-target="#exampleModal" value="Enviar Solicitud de Registro">
 
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enviar solicitud?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Debera aguardar a que se confirme su solicitud para utilizar su cuenta. Gracias.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <input type="submit" class="btn btn-success" value="Enviar Solicitud" href="http://18.216.97.211/login.php">
      </div>
    </div>
  </div>
</div>


              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Olvide mi contraseña?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.php">Ya tenes cuenta flaco? Entra!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>
