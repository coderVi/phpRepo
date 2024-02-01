<?php
require_once "../Controller/data.php"; // data.php dosyasını require et
if ($_SERVER["REQUEST_METHOD"] != "POST") { header("Location: https://google.com");}
$process = $_POST['process'];

if($process == "login"){
    if(empty($_POST['mail'])){
        header("Location:../View/login.php?error=e posta adresi boş!"); exit();
    }
    if(empty($_POST['sifre'])){
        header("Location:../View/login.php?error=şifre alanı boş!"); exit();
    }

    $sql = "SELECT * FROM tbl_users WHERE mail = '{$_POST['mail']}' AND sifre = '{$_POST['sifre']}' LIMIT 1";
    $result = $conn->query($sql);
    $userName = $result->fetch_assoc()['adSoyad'];
    if ($result->num_rows > 0) {
        header("Location:../View/menu.php?userName={$userName}"); exit();
    } else {
        header("Location:../View/login.php?error=kullanıcı adı veya şire hatalı!!!"); exit();
    }
}
if($process == "register"){
    if (!empty($_POST["adSoyad"]) && !empty($_POST["mail"]) && !empty($_POST["sifre"]) && !empty($_POST["sifreRPT"])) {

        $adSoyad = $_POST["adSoyad"];
        $mail = $_POST["mail"];
        $sifre = $_POST["sifre"];
        $sifreRpt = $_POST["sifreRPT"];

        if ($sifre != $sifreRpt) {
            $errors[] = "Şifreler uyuşmuyor";
        }

            if (empty($errors)) {
                if ($conn) {
                    $sql = "INSERT INTO tbl_users (adSoyad, mail, sifre, created_at) VALUES ('$adSoyad', '$mail', '$sifre', NOW())";

                    if ($conn->query($sql) === TRUE) {
                        header("Location: ../View/login.php?success=Kayıt Başarılı! Giriş Yapabilirsiniz");
                        exit();
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                        echo "Eksik bilgi girişi.";
                    }
                } else {
                    echo "Database bağlantı hatası.";
                }
        } else {
            // Hata durumunda kullanıcıyı kayıt sayfasına yönlendir
            header("Location: ../View/register.php");
            exit();
            echo "Eksik bilgi girişi.";
        }

        $conn->close();
    } else {
        // Eksik bilgi durumunda kullanıcıyı kayıt sayfasına yönlendir
        header("Location: ../View/register.php");
        exit();
        echo "Eksik bilgi girişi.";
    }
}


header("Location: https://google.com"); exit();

?>