<?php
    $servername = "127.0.0.1";
    $username = "gustavo";
    $password = "1234567890";
    $db = "sistema";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$db);

    // Check connection
    if (!$conn) {
        die("Server connection failed: " . mysqli_connect_error());
    }
?>