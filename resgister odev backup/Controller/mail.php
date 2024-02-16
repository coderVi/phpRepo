<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';

    //Data bağlantısı
    require '../Controller/data.php';

    //! Contact sayfasından gelen post şeklinde ki veri adlarını değişkenlere atıyoruz
    $dataMail = $_POST["mail"];
    $konu = $_POST["konu"];
    $mesaj = $_POST["mesaj"];
    $telefon = $_POST["phone"];
    $web_site = $_POST["web"];
    $isim = $_POST["name"];

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPKeepAlive = true;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure= "tls";
    //Türkçe karakterler için eklendi
    $mail->CharSet= 'UTF-8';

    $mail->Port = 587;
    $mail->Host = "smtp.gmail.com";

    $mail->Username="your@example.com";
    $mail->Password="Password";

    $mail->setFrom("{$dataMail}","Developer Blog, Bize Ulaşın",$auto =true);
    $mail->addAddress("contact@example.com","Coder Vi");

    $mail->Subject="{$konu}";
    $mail->Body = "Gönderici Ad Soyad : {$isim}\nGönderici Mail : {$dataMail}\nTelefon : {$telefon}\nKonu : {$konu}\nWebsitesi : {$web_site}\nMesaj : {$mesaj}";
    if ($_SERVER["REQUEST_METHOD"] != "POST") { header("Location: https://google.com/404");}
    if(!empty($dataMail) || !empty($isim) || !empty($mesaj) || !empty($telefon)){
        if ($mail->send()) {
            $sql = "INSERT INTO tbl_mesaj(dataMail, konu, mesaj, telefon, website, gondericiAdi) VALUES ('$dataMail', '$konu', '$mesaj', '$telefon', '$web_site', '$isim')";
            if ($conn->query($sql) === TRUE){
                echo "Kayıt başarılı";
            }
            header("Location: ../View/contactUs.php?mailOk=Mail Başarı İle Gönderildi!");
            exit();
        }
    }else{
        header("Location: ../View/contactUs.php?mailErr=Mail Gönderimi Başarısız Lütfen Zorunlu Alanları Doldurun!");
        exit();
    }
?>