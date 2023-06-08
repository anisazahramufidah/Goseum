<?php

$serverdatabase = "127.0.0.1";
$username = "root";
$password = '';
$dbname = "goseum";
$host = new mysqli("localhost","root","","goseum");


// Create a new connection

$no_hp = $_POST["no_hp"];
$gmail =  $_POST["gmail"];
$password =  $_POST["password"];

$sql = "INSERT INTO signin (no_hp,gmail,password)
        VALUES ('$no_hp','$gmail','$password');

if ($host->query($sql) === TRUE) {
    echo "sukses membuat akun";
    } else {.sql.
        echo "Error:" $sql. "<br>" .$host->error;
    }

    // Close database connection
    $host->Close();
    ?>