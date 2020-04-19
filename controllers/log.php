<?php
    include("../config.php");
    if (!isset($_SESSION['username'])){
        session_start();
    }
    // Sessions variables
    $username = $_POST['username'];
    $userpasswd = $_POST['userpasswd'];
    if(isset($username) && isset($userpasswd)){
        $query = mysqli_query($conn, "SELECT * FROM usuario WHERE usuario = '$username' AND passwd = '$userpasswd'");
        $row = mysqli_fetch_array($query);

        if(!$row[0]){
            echo '<script languaje = javascript>
            alert("Datos incorrectos")
            self.location="../index.php"</script>';
            }else{
                if($row['rol'] == "administrador"){
                    header("Location: ../views/admin.php");
                    $_SESSION['usuario'] = $row['username'];
                    $_SESSION['rol'] = "administrador";
                }elseif($row['rol'] == "director"){
                    header("Location: ../views/director.php");
                    $_SESSION['usuario'] = $row['username'];
                    $_SESSION['rol'] = "director";
                }elseif($row['rol'] == "auxiliar") {
                    header("Location: ../views/auxiliar.php");
                    $_SESSION['usuario'] = $row['username'];
                    $_SESSION['rol'] = "auxiliar";
                }
        }
    }
?>