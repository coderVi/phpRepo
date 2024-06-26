<?php
// Veritabanı bağlantısını içe aktar
require_once "../Controller/data.php";

// Eğer form gönderilmişse (delete veya update)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["delete"])) {
        // Form verilerini al
        $delOdaNo = $_POST["delOdaNo"];
        $delName = $_POST["delName"];

        // Gerekirse veriyi doğrula ve temizle

        // Veritabanından veriyi sil
        $deleteSql = "DELETE FROM tbl_rezerve WHERE odaNo = '$delOdaNo' AND adSoyad = '$delName'";

        if ($conn->query($deleteSql) === TRUE) {
            header("Location: ../View/liste.php?onay=Rezervasyon iptal edildi.");
            exit();
        } else {
            header("Location: ../View/liste.php?hata=Rezervasyon iptali sırasında bir hata oluştu.");
            exit();
        }
    } elseif (isset($_POST["update"])) {
        header("Location: ../View/liste.php");
            exit();
    }
}
?>
