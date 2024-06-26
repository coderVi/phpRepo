<?php
    require "../View/header.php";
?>
<style>
    body{
        background: linear-gradient(to right, blue , aqua);
    }
    .cards{
        padding:7.1%;
        margin: 0;
    }
    footer{
        padding: 2%;
    }
</style>
<div class="cards row">
    <div class="row row-cols-1 row-cols-md-2 g-4 d-flex justify-content-center m-5">
        <?php
            // Veritabanından verileri çek
            require "../Controller/data.php";
            $sql = "SELECT id, baslik, yazi, tarih FROM tbl_blog ORDER BY id DESC LIMIT 8";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Her bir satır için kartları oluştur
                while($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-3">
                            <div class="card">
                                <img src="../picture/logo.png" class="card-img-top w-25">
                                <div class="card-body">
                                    <h5 class="border card-title">' . $row['baslik'] . '</h5>
                                    <p class="border card-text">' . substr($row["yazi"], 0, 100) . ' <a style="text-decoration:none;" href="../View/viewBlog.php?id=' . $row['id'] . '">[...]</a></p>
                                    <p class="card-text"><small class="text-muted">Yüklenme Tarihi : ' . $row['tarih'] . '</small></p>
                                </div>
                            </div>
                        </div>';
                }
            } else {
                echo "Veritabanında henüz içerik bulunmuyor.";
            }

            // Veritabanı bağlantısını kapat
            $conn->close();
        ?>
    </div>
    <a href="../View/viewBlog.php"></a>
</div>

<?php require "../View/footer.php";?>