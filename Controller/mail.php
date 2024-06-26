<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';
    
    ini_set('display_errors',1);
    sendMail();
    function sendMail() {
        $process = $_POST['process'];
        require '../Controller/data.php';
        $referer = isset($_POST['referer']) ? $_POST['referer'] : '';
        
        // Contact sayfasından gelen post şeklindeki veri adlarını değişkenlere atıyoruz
        //Data bağlantısı
        $dataMail = $_POST["mail"];
        $konu = $_POST["konu"];
        $mesaj = $_POST["mesaj"];
        $telefon = preg_replace("/[^0-9]/", "", $_POST["phone"]);
        $web_site = $_POST["web"];
        $isim = $_POST["name"];
        $page = $referer;

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPKeepAlive = true;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure= "tls";
        // Türkçe karakterler için eklendi
        $mail->CharSet= 'UTF-8';

        $mail->Port = 587;
        $mail->Host = "smtp.gmail.com";

        $mail->Username="abdulsamet.yilmaz@gmail.com";
        $mail->Password="Sifre Giris Alanı";

        $mail->setFrom("{$dataMail}","Talt Tiil, Mesaj",$auto =true);
        $mail->addAddress("mr.asmtylmz@gmail.com","Abdülsamet YILMAZ");

        $mail->Subject="{$konu}";
        
        if($process == "contact")
        if(!empty($dataMail) && !empty($isim) && !empty($mesaj) && !empty($telefon)){
            $mail->Body = "Gönderici Ad Soyad : {$isim}\n\nGönderici Mail : {$dataMail}\n\nTelefon : {$telefon}\n\nKonu : {$konu}\n\nWebsitesi : {$web_site}\n\nMesaj : {$mesaj}\n\nGönderilen Sayfa : {$page}";
            if ($mail->send()) {
                $sql = "INSERT INTO tbl_mesaj(dataMail, konu, mesaj, telefon, website, gondericiAdi) VALUES ('$dataMail', '$konu', '$mesaj', '$telefon', '$web_site', '$isim')";
                if ($conn->query($sql) === TRUE){
                    echo "Kayıt başarılı";
                    sanalsantraltest($telefon);
                }
                header("Location: ../View/contactUs.php?mailOk=Mail Başarı İle Gönderildi!");
                exit();
            }
        } else { 
            header("Location: ../View/contactUs.php?mailErr=Mail Gönderimi Başarısız Lütfen Zorunlu Alanları Doldurun!");
            exit();
        }
        if($process == "paket"){
            if(!empty($dataMail) && !empty($isim) && !empty($mesaj) && !empty($telefon)){
                if ($mail->send()) {
                    $sql = "INSERT INTO tbl_mesaj(dataMail, konu, mesaj, telefon, website, gondericiAdi) VALUES ('$dataMail', '$konu', '$mesaj', '$telefon', '$web_site', '$isim')";
                    if ($conn->query($sql) === TRUE){
                        echo "Kayıt başarılı";
                        sanalsantraltest($telefon);
                    }
                    header("Location: ../View/paketler.php?paketOk=Mail Başarı İle Gönderildi!");
                    exit();
                }
            } else {
                header("Location: ../View/paketler.php?paketErr=Mail Gönderimi Başarısız Lütfen Zorunlu Alanları Doldurun!");
                exit();
            }
        }
    }
    //sms atmak için veriyi buradan saĞlıyoruz.
    function sanalsantraltest($telefon){    

        /**
         * Test SMS i
         */
        $postUrl = "http://sms2.sanalsantral.com.tr/api/smspost/v1";
        $postData = 
        "". "<sms>".
        "<apikey>Key Alanı</apikey>".
        "<header>Oduyo</header>".
        "<type></type>".
        "<validity>2880</validity>".
        "<message>".
        "<gsm>".
        "<no>$telefon</no>".
        "</gsm>". "<msg><![CDATA[Mesajınız Alındı En kısa sürede sizlere dönüş sağlayacağız!
        ]]></msg>". "</message>".
        "</sms>";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $postUrl);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$postData); 
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, Array("Content-Type: text/xml; charset=UTF-8"));
        $response = curl_exec($ch);
        curl_close($ch);

        echo json_encode($response);

    }
?>