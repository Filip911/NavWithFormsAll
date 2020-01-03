<?php

    function generate() {
        // $keyLenght = 10;
        // $str = '0123456789qwertyuiuoplkjhgfdaszxcvbnm!@#$%^&*()';
        // $randStr = substr(str_shuffle($str), 0, $keyLenght);

        $randStr = uniqid('fec', true);
        return $randStr;
    }

    echo generate();

    include 'includes/db.inc.php';

    $sql_command = "SELECT * FROM users";
    $action = mysqli_query($conn, $sql_command);
    
        echo "<h1>Result: </h1>";
        echo "<table width='80%' cellspan='2' border='2'><tr bgcolor='#E2CAA7'>";
        echo "<td>idUsers</td>";
        echo "<td>uidUsers</td>";
        echo "<td>emailUsers</td>";
        echo "<td>pwdUsers</td>";
        echo "<td>counts</td>";
        echo "<td>datee</td>";
    while ($line = mysqli_fetch_assoc($action)) {
        echo "<tr><td>" . $line['idUsers'] . 
        "</td><td>" . $line['uidUsers'] .
        "</td><td>" . $line['emailUsers'] .
        "</td><td>" . $line['pwdUsers'] .
        "</td><td>" . $line['counts'] .
        "</td><td>" . $line['datee'] 
        . "</tr>";
    }
        echo "</table>";


?>