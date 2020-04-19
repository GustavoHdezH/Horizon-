# Sistema Básico

Sistema básico para la creación de un sitio web, en la cual se pretende usar los distintoas tag que tiene una pagina web, para us uso libre. Con el proposito de crear un sistema de información para el uso en un centro educativo y les permita realizar tareas asignada por el director y realizadas por el auxiliar.

## Requerimientos

PHP 7.3.12 y HTML 5 son actualmente compatibles con este proyecto. tambien se utilizo el software de [VS CODE][1] para editar los archivos necesarios y el servidor [WAMP Server][2] para desplegar la aplicación.

[1]: https://code.visualstudio.com
[2]: http://wampserver.aviatechno.net

## Inicio Rápido

Para este proyecto se va a utilizar los datos de la tabla de usuario pa acceder a las sesiones de cada uno de los perfiles dentro del sistema. Los cuales son tres: **Administrador, Gerente y Auxiliar.**

### Tabla de usuario

| id_usuario | Nombre | Apellido | usuario | passwd | rol |
|------------|--------|----------|---------|--------|-----|
|1|Gustavo  |Hernandez  |gustavo |12345    |administrador|
|2|Manuel   |Aguilar    |manuel  |12345    |director|
|3|Carlos   |Rodriguez  |carlos  |12345    |auxiliar|

## Ejemplo

### Base de datos para solicitar datos

```sql
CREATE TABLE IF NOT EXISTS usuario(
    id_usuarios int AUTO_INCREMENT,
    nombre varchar(20),
    apellido varchar(20),
    usuario varchar(20),
    passwd varchar(20),
    rol varchar(20),
    PRIMARY KEY (id_usuarios)
)Engine=InnoDB default charset=latin1;
```

### Archivo con las creenciales necesarias para accesar al servidor

```PHP
<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "1234567890";
    $db = "sistema";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$db);

    // Check connection
    if (!$conn) {
        die("Server connection failed: " . mysqli_connect_error());
    }
?>
```

### Archivo con la configuración de acceso por usuario, log in

```PHP
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

```

### Archivo con la configuración de salida por usuario, log out

```PHP
<?php
    if(isset($_GET['cerrar_sesion'])){
        session_start();

        session_unset();

        session_destroy();
    }
    header("location: ../index.php");
    exit();
?>
```

Proyecto completo en [Diseño de sitios web][3]

&copy; 2020 Gustavo Hazel Hernandez Hurtado

[3]:https://github.com/GustavoHdezH/Horizon-
