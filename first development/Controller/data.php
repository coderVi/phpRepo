<<<<<<< HEAD
<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "users";
    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Bağlantı hatası: " . $conn->connect_error);
    }
=======
<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "users";
    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Bağlantı hatası: " . $conn->connect_error);
    }
>>>>>>> c669741b3cf9484c757560b0104ecafe956902da
?>