<?php
require_once "../Controller/data.php"; //* data.php dosyasını require et

    $adSoyad = $_POST["adSoyad"];
    $mail = $_POST["mail"];
    $sifre = md5($_POST["sifre"]);
    $sifreRpt = md5($_POST["sifreRPT"]);
if ($_SERVER["REQUEST_METHOD"] != "POST") { header("Location: https://google.com/404");}
$process = $_POST['process'];

if($process == "login"){
    if(empty($_POST['mail'])){
        header("Location:../View/login.php?errorEmail=e posta adresi boş!"); exit();
    }
    if(empty($_POST['sifre'])){
        header("Location:../View/login.php?error=şifre alanı boş!"); exit();
    }
    $sql0 = "SELECT * FROM tbl_users WHERE mail = '{$_POST['mail']}' AND sifre != '{$sifre}' LIMIT 1";
    $result0 = $conn->query($sql0);
    if($result0-> num_rows >0){
        header("Location:../View/login.php?errorKadi=HATALI ŞİFRE!"); exit();
    }

    $sql = "SELECT * FROM tbl_users WHERE mail = '{$_POST['mail']}' AND sifre = '{$sifre}' LIMIT 1";
    $result = $conn->query($sql);
    $userName = $result->fetch_assoc()['adSoyad'];
    if ($result->num_rows > 0) {
        header("Location:../View/menu.php?userName={$userName}"); exit();
    } else {
        header("Location:../View/login.php?error=kullanıcı adı veya şire hatalı!!!"); exit();
    }
}

if (empty($_POST["adSoyad"])){
    header("Location: ../View/register.php?kAdiErr=İsim ve Soyisim alanı boş");
    exit();
}
if (empty($_POST["mail"])){
    header("Location: ../View/register.php?mailErr=Mail alanı boş");
    exit();
}
if (empty($_POST["sifre"]) || empty($_POST["sifreRPT"])){
    header("Location: ../View/register.php?passwdErr=Şifre alanı boş");
    exit();
}

if($process == "register"){
    if (!empty($_POST["adSoyad"]) && !empty($_POST["mail"]) && !empty($_POST["sifre"]) && !empty($_POST["sifreRPT"])) {
        

        if ($sifre != $sifreRpt) {
            $errors[] = "Şifreler uyuşmuyor";
        }

            if (empty($errors)) {
                if ($conn) {
                    $sql0 = "SELECT * FROM tbl_users WHERE mail = '$mail' LIMIT 1"; //! gereksiz kaynak tükemini minimaize etmek için LİMİT 1 verdim
                    $result0 = $conn->query($sql0);
                    if($result0->num_rows > 0){ 
                        header("Location: ../View/register.php?error=Zaten kayıtlısınız. Mevcut bilgileriniz ile giriş yapabilirsiniz!");
                        exit();
                    }
                    
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
            //! Hata durumunda kullanıcıyı kayıt sayfasına yönlendir
            header("Location: ../View/register.php");
            exit();
        }
        
        $conn->close();
    } else {
        //! Eksik bilgi durumunda kullanıcıyı kayıt sayfasına yönlendir
        header("Location: ../View/register.php?infoErr=Tüm bilgiler eksiksiz girilmelidir.");
        exit();
        echo "Eksik bilgi girişi.";
    }
}


header("Location: https://google.com/404"); exit();

?>