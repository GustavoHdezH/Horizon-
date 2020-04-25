<?php include("../layouts/headerAdm.php");
      include("../config.php");
      session_start();
?>

<div class="container p-4">
  <div class="row">
    
    <div class="col-md-4">
      <div class="card card-body">
          <form action="">
              <div class="form-group">
                <input type="text" name="titulo" class="form-control"
                placeholder= "Nombre" autofocus autocomplete="off">
              </div>
              <div class="form-group">
                <input type="text" name="titulo" class="form-control"
                placeholder= "Materno" autofocus autocomplete="off">
              </div>
              <div class="form-group">
                <input type="text" name="titulo" class="form-control"
                placeholder= "Paterno" autofocus autocomplete="off"> 
              </div>
              <div class="form-group">
                <input type="text" name="titulo" class="form-control"
                placeholder= "Usuario" autofocus autocomplete="off">
              </div>
              <div class="form-group">
                <input type="text" name="titulo" class="form-control"
                placeholder= "clave" autofocus autocomplete="off">
              </div>
              <div class="form-group">
                <input type="text" name="titulo" class="form-control"
                placeholder= "Puesto" autofocus autocomplete="off">
              </div>
          </form>
      </div><!--card card-body-->
      <br>
    </div> <!--col-md-4-->
    <div class="col-md-12 mx-auto">
        <table class="table table-hover">
          <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Usuario</th>
                <th>Clave</th>
                <th>Puesto</th>
                <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
                <?php
                    $query = "SELECT id_usuarios, nombre, apellido, usuario, passwd, rol FROM usuario";
                    $result = mysqli_query($conn,$query);
                    while($row = mysqli_fetch_array($result)){
                ?>
              <tr>
                <td><?php echo $row['id_usuarios']?></td>
                <td><?php echo $row['nombre']?></td>
                <td><?php echo $row['apellido']?></td>
                <td><?php echo $row['usuario'] ?></td>
                <td><?php echo $row['passwd']?></td>
                <td><?php echo $row['rol']?></td>
                <td>
                    <a href="update.php?id=<?php echo $row['id_usuarios']?>" class="btn btn-secondary">
                      <i class="fa fa-edit"></i>
                    </a>
                    <a href="delete.php?id=<?php echo $row['id_usuarios']?>" class="btn btn-danger">
                       <i class="fa fa-trash"></i>
                    </a>
                </td>
              </tr>
              <?php }?>
          </tbody>
        </table>
    </div>
  </div>
</div>

<?php include("../layouts/footerAdm.php");?>