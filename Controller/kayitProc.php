<?php
    require "../Controller/data.php";
    $adSoyad = $_POST["adSoyad"];
    $odaNo = $_POST["odaNo"];
    $telefon = $_POST["telNo"];
    $giris = $_POST["girisTarih"];
    $cikis = $_POST["cikisTarih"];

    // Eğer dosya yükleme yapıldıysa, dosyaların geçici konumlarından hedef konumlarına taşıyalım
    $kimlikOnyuz = $_FILES["kimlikOnyuz"]["name"];
    $kimlikArkaYuz = $_FILES["kimlikArkaYuz"]["name"];

    // Dosya taşıma işlemleri
    move_uploaded_file($_FILES["kimlikOnyuz"]["tmp_name"], "../uploads/" . $kimlikOnyuz);
    move_uploaded_file($_FILES["kimlikArkaYuz"]["tmp_name"], "../uploads/" . $kimlikArkaYuz);

    // Check for room availability in tbl_odakayit
    $sorgu = "SELECT * FROM tbl_odakayit WHERE odaNo = '$odaNo' AND ('$giris' BETWEEN girisTarih AND cikisTarih OR '$cikis' BETWEEN girisTarih AND cikisTarih)";
    $tarihKontrol = "SELECT * FROM tbl_odakayit WHERE $giris > NOW()";
    $sonuc = $conn->query($sorgu);
    if(empty($adSoyad)|| empty($odaNo) || empty($telefon) || empty($giris) || empty($cikis) || empty($kimlikOnyuz) || empty($kimlikArkaYuz)){
        header("Location: ../View/musteriKayit.php?eksikbilgi");
        exit();
    }else{
        if($conn->query($tarihKontrol)->num_rows > 0){
            header("Location: ../View/musteriKayit.php?tarihError");
            exit();
        }else{
            if ($sonuc->num_rows > 0) {
                header("Location: ../View/musteriKayit.php?doluOda=Bu oda da farklı Misafir mevcut");
                exit();
            } else {
                // Room is available, insert into tbl_odakayit
                $sql = "INSERT INTO tbl_odakayit (adSoyad, odaNo, telefon, girisTarih, cikisTarih, kimlikOnYuz, kimlikArkaYuz) VALUES ('$adSoyad','$odaNo','$telefon','$giris','$cikis','$kimlikOnyuz','$kimlikArkaYuz')";
        
                if ($conn->query($sql)) {
                    header("Location: ../View/musteriKayit.php?success=Kayıt Başarılı");
                    exit();
                } else {
                    header("Location: ../View/musteriKayit.php?error=Kayıt Esnasında Sorun Oluştu");
                    exit();
                }
            }

        }
    }
?>
