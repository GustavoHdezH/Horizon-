<?php
    if(isset($_GET['cerrar_sesion'])){
        session_start();
        
        session_unset();

        session_destroy();
    }
    header("location: ../index.php");
    exit();
?>