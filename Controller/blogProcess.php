<?php
    dataRec();

    function dataRec(){
        require "../Controller/data.php";

        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(!empty($_POST['baslik'] || !empty($_POST['yazi']))){
                $baslik = strtoupper($_POST['baslik']);
                $yazi = $_POST['yazi'];

                // Correct SQL query
                $dataReception = "INSERT INTO tbl_blog (baslik, yazi, tarih) VALUES ('$baslik', '$yazi', NOW())";
                // Execute the query
                if ($conn->query($dataReception) === TRUE) {
                echo "Veri başarıyla eklendi.";
                header("Location: ../View/blogUp.php");
                exit(); // Make sure to exit after redirect
            }
        } else {
            echo "Hata: " . $dataReception . "<br>" . $conn->error;

            // Close the database connection
            $conn->close(); 
            }
            
        }
    }
?>