<?php
    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "loginsistem";
    $conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);
    if(!$conn) {
        die("Connection failed: ".mysqli_connect_error());   
    } else {
        echo 'connected' . mysqli_get_host_info($conn);
    }