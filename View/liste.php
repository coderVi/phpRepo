<?php require_once "../Controller/data.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Talt tiil Hotel  </title>
    <link rel="stylesheet" href="../Static/indexStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../picture/logo.png" type="image/x-icon"> <!-- title icon u eklemek için olan linkimiz -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <style>
    body{
        background: linear-gradient(to right ,  pink , orange , aqua);
        margin: 0;
        padding: 0;
    }

    /* Ek CSS ile düzenlemeler */
    .container {
        padding-top: 20px;
    }
    .footer {
        bottom: 500%;
    }
  </style>
<body>
    <!-- Navbar Side -->
    <!-- Navbar ile olan tüm işlemler bu bölümde yapılmıştır,
    Sayfalar arası geçişler buradan yapılmaktadır.
    -->
    <nav style="background-color: gray;" id="navbar" class="navbar navbar-expand-lg container-fluid">
        <div class="container-fluid">
            <a href="index.php">
                <img src="../picture/logo.png" alt="Bootstrap" width="70" height="64">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse d-lg-flex justify-content-center mx-auto" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a id="navLink" class="nav-link" aria-current="page" href="index.php">Anasayfa</a>
                        </li>
                        <li class="nav-item">
                            <a id="navLink" class="nav-link" href="egitim.php">Spor Ve Spa</a>
                        </li>
                        <li class="nav-item">
                            <a id="navLink" class="nav-link" href="about.php">Hakkımızda</a>
                        </li>
                        <li class="nav-item">
                            <a id="navLink" class="nav-link" href="contactUs.php">Bize Ulaşın</a>
                        </li>
                        <li class="nav-item">
                            <a id="navLink" class="nav-link" href="paketler.php">Paketler</a>
                        </li>
                        <li class="nav-item">
                            <a id="navLink" class="nav-link" href="blog.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a id="navLink" class="nav-link" href="musteriKayit.php">Müsteri Kaydı</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <?php
    // Veritabanı bağlantısını içe aktar
    require_once "../Controller/data.php";

    // Verileri çekmek için sorguyu hazırla
    $sql = "SELECT * FROM tbl_rezerve";
    $result = $conn->query($sql);
    ?>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2 mt-5">
                <!-- Orta kısımdaki kutu -->
                <div class="table-container">
                    <?php if ($result->num_rows > 0): ?>
                        <table class="table table-bordered">
                                <tr>
                                    <th>Telefon no</th>
                                    <th>Ad Soyad</th>
                                    <th>Oda No</th>
                                    <th>Giriş Tarihi</th>
                                    <th>Çıkış Tarihi</th>
                                    <!-- Diğer sütun başlıkları buraya eklenebilir -->
                                </tr>
                                <?php while ($row = $result->fetch_assoc()): ?>
                                    <tr>
                                        <td><?php echo $row["telefonNo"]; ?></td>
                                        <td><?php echo $row["adSoyad"]; ?></td>
                                        <td><?php echo $row["odaNo"]; ?></td>
                                        <td><?php echo $row["giris"]; ?></td>
                                        <td><?php echo $row["cikis"]; ?></td>
                                        <!-- Diğer sütun verileri buraya eklenebilir -->
                                    </tr>
                                <?php endwhile; ?>
                        </table>
                    <?php else: ?>
                        <p>Hiç veri bulunamadı.</p>
                    <?php endif; ?>
                </div>

                <div class="form-container">
                    <!-- Orta kısımdaki kutu -->
                    <form class="row" method="POST" action="../Controller/listPros.php">
                        <label>Oda Numarası: </label>
                        <input type="text" name="delOdaNo" class="form-control"> <br>
                        <label>Ad Soyad: </label>
                        <input type="text" name="delName" class="form-control"> <br>
                        <button type="submit" name="delete" class="btn btn-danger mt-3">Rezervasyon İptal</button>
                        <button type="submit" name="update" class="btn btn-primary mt-3">Liste Güncelle</button><br> <br>
                        <a class="btn btn-primary mt-3" href="../View/blogUp.php">Blog Sayfasına Yönlendirme</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
<!-- Bootstrap Js import link i -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<!-- Scroll değeri eğer belirli bir değerin üzerindeyse arkaplan rengini değiştir -->
<script>
    window.addEventListener('scroll', function() {
        var navbar = document.getElementById('navbar');
        if (window.scrollY > 100) {
            navbar.style.backgroundColor = 'rgb(54, 54, 54)';
        } else {
            navbar.style.backgroundColor = '';
        }
    });

    window.addEventListener('scroll', function(){
        var egitim = document.getElementById('egitim');
        if(window.scrollY > 300){
            egitim.style.backgroundColor = 'rgb(54, 54, 54)';
            egitim.style.textShadow = "3px 3px 5px red"
            egitim.style.color="white"
        } else{
            egitim.style.backgroundColor = ""
            egitim.style.color="black"
            egitim.style.textShadow = "3px 3px 5px"
        }
    });
</script>
</html>
