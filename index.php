<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./views/static/CSS/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="sidenav">
        <div class="login-main-text">
           <h2>Universidad ICEL<br> Sistema de Acceso a Usuarios</h2>
           <p> Página de inicio sesión</p>
        </div>
     </div>
     <div class="main"><!--div.class.main 1-->
        <div class="col-md-6 col-sm-12"> <!--div.class.col-md-6 col-sm-12 2-->
               <div class="login-form">
               <form action ="controllers/log.php" id="form" method="POST">
                  <div class="form-group">
                     <label>Nombre de usuario</label>
                     <input type="text" name="username" id="username" class="form-control" autocomplete="off" autofocus >
                  </div>
                  <div class="form-group">
                     <label>Contraseña</label>
                     <input type="password" name="userpasswd" id="passwd" class="form-control" autocomplete="off" requiered>
                  </div>
                  <button type="submit"  id="submit" class="btn btn-outline-primary btn-block">Ingresar</button>
               </form>
            </div>
        </div> <!--div.class.col-md-6 col-sm-12 2-->
     </div><!--div.class.main 1-->
      <script src="views/static/JS/app.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</body>
</html>