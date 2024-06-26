<?php require "../View/header.php"; ?>

<style>
    body{
        background: linear-gradient(to right, blue ,aqua);
    }
    .auto{
        margin-top: 5rem !important;
        margin-bottom: 27.4rem !important;
    }   
    footer{
        padding: 2%;
    }
</style>

<?php

// İlk olarak, veritabanı bağlantısını sağlayın
require "../Controller/data.php";

// ID parametresini kontrol edin
if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    // ID'yi alın
    $blogID = $_GET['id'];

    // SQL sorgusu ile ilgili blog yazısını çekin
    $sql = "SELECT baslik, yazi, tarih FROM tbl_blog WHERE id = $blogID";
    $result = $conn->query($sql);

    // Sonuç kontrolü yapın
    if ($result->num_rows > 0) {
        // Blog yazısı varsa, içeriği göster
        $row = $result->fetch_assoc();

        echo '<div style="background: linear-gradient(to right, blue , aqua) !important ;" class="card  container-fluid">
                <div style="background-color: white;" class="card-body auto p-5 m-5">
                    <h5 class="card-title">' . $row['baslik'] . '</h5>
                    <p class="card-text">' . $row['yazi'] . '</p>
                    <p class="card-text"><small class="text-muted">Yüklenme Tarihi: ' . $row['tarih'] . '</small></p>
                </div>
            </div>';
    } else {
        echo "Blog yazısı bulunamadı.";
    }
} else {
    echo "Geçersiz blog ID.";
}

// Veritabanı bağlantısını kapat
$conn->close();
?>


<?php require "../View/footer.php"; ?>