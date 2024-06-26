<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "oteldb";
    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Bağlantı hatası: " . $conn->connect_error);
    }
?>