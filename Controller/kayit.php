<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require '../Controller/data.php';
    $kisiSayisi = $_POST["kisiSayisi"];
    $adSoyad = $_POST["adSoyad"];
    $telefon2 = $_POST["phone"];
    $odaNo = $_POST["odaNo"];
    $paketler = $_POST["paketler"];
    $giris = $_POST["giris"];
    $cikis = $_POST["cikis"];
    
    if(!empty($kisiSayisi) && !empty($adSoyad) && !empty($telefon2) && !empty($odaNo) && !empty($paketler) && !empty($giris) && !empty($cikis))
    {
        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);
        
        // SMTP settings
        $mail->isSMTP();
        $mail->SMTPKeepAlive = true;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "tls";
        $mail->CharSet = 'UTF-8';
        $mail->Port = 587;
        $mail->Host = "smtp.gmail.com";
        $mail->Username = "abdulsamet.yilmaz@oduyo.com.tr";
        $mail->Password = "password";

        // Sender and recipient
        $mail->setFrom("mr.asmtylmz@gmail.com", "Talt Tiil, Mesaj", $auto = true);
        $mail->addAddress("mr.asmtylmz@gmail.com", "Abdülsamet YILMAZ");

        // Email subject
        $mail->Subject = "Rezervasyon";

        // Body of the email
        $mail->Body = "
            Rezervasyon Yapılan isim: {$adSoyad},\n
            Telefon Numarası: {$telefon2},\n
            Oda numarası: {$odaNo},\n
            Giriş Yapmak İstediği Tarih: {$giris},\n
            Çıkış Yapmak İstediği Tarih: {$cikis},\n
            Seçtiği Paket: {$paketler}
        ";

        // Send the email
        try {
            $mail->send();
            // Check if the room is available
            $sorgu = "SELECT * FROM tbl_rezerve WHERE odaNo = '$odaNo' AND ('$giris' BETWEEN giris AND cikis OR '$cikis' BETWEEN giris AND cikis)";
            $sonuc = $conn->query($sorgu);

            if ($sonuc->num_rows > 0) {
                // The room is not available
                $hata1 = "Üzgünüz, belirtilen tarih aralığında seçilen oda dolu. Lütfen başka bir tarih veya oda seçiniz.";
                header("Location: ../View/menu.php?hata={$hata1}");
                exit;
            } else {
                // Room is available, proceed with the reservation
                $sql = "INSERT INTO tbl_rezerve(odaNo, giris, cikis, paketler, adSoyad, telefonNo) VALUES ('$odaNo', '$giris', '$cikis', '$paketler', '$adSoyad', '$telefon2')";

                if ($conn->query($sql) === TRUE) {
                    // Reservation successful
                    $onay = "Rezervasyon başarıyla eklendi!";
                    header("Location: ../View/menu.php?onay={$onay}");
                    exit;
                } else {
                    // Error in SQL query
                    echo "Hata: " . $sql . "<br>" . $conn->error;
                }
            }
        } catch (Exception $e) {
            // Error sending email
            echo "Hata: " . $e->getMessage();
        }
    } else {
        header("Location: ../View/menu.php?hata=Tüm Alanlar Doldurulmalı");
        exit;
    }
}

// Close the database connection
$conn->close();

?>
