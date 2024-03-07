<?php
    require "./data.php"; // Bu dosyanın veritabanı bağlantı bilgilerini içerdiğini varsayalım

    if (isset($_POST["uploadFile"])) {
        // Form gönderimi işle
        $isim = $_POST["isim"];
        $okul = $_POST["okul"];

        // Geçici dosya adını ve orijinal dosya adını al
        $geciciDosyaYolu = $_FILES["picture"]["tmp_name"];
        $dosyaAdi = $_FILES["picture"]["name"];

        // Yüklenen dosyayı hedef klasöre taşı
        if (move_uploaded_file($geciciDosyaYolu, $dosyaAdi)) {
            // Veritabanı bağlantısını kontrol et
            if ($conn->connect_error) {
                die("Bağlantı hatası: " . $conn->connect_error);
            }

            // Veritabanına veri ekle
            $sql = "INSERT INTO tbl_okul (resim, isim, okul) VALUES ('$dosyaAdi', '$isim', '$okul')";

            if ($conn->query($sql) === TRUE) {
                header("Location: index.php");
            } else {
                echo "Hata: " . $sql . "<br>" . $conn->error;
            }

            // Veritabanı bağlantısını kapat
            $conn->close();
        }
    }
?>
