<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Talt Tiil Hotel</title>
    <link rel="stylesheet" href="../Static/indexStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../picture/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background: linear-gradient(to right, aqua, blue);
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: gray;
        }

        .navbar img {
            width: 70px;
            height: 64px;
        }

        form {
            margin-top: 20px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
        }

        form label {
            display: block;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <!-- Navbar Section -->
    <nav class="navbar navbar-expand-lg container-fluid">
        <div class="container-fluid">
            <a href="index.php">
                <img src="../picture/logo.png" alt="Bootstrap">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-lg-flex justify-content-center mx-auto" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Anasayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="egitim.php">Spor Ve Spa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">Hakkımızda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactUs.php">Bize Ulaşın</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="paketler.php">Paketler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kayitListe.php">Kayıtlar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <br> <br> <br> <br> <br> <br> <br> 
        <?php if(isset($_GET["success"])): ?>
            <div class="col-md-8 alert mx-auto alert-success" role="alert">
                <?= $_GET["success"] ?>
            </div>
        <?php endif; ?>
        <?php if(isset($_GET["doluOda"])): ?>
            <div class="col-md-8 alert mx-auto alert-warning" role="alert">
                <?= $_GET["doluOda"] ?>
            </div>
        <?php endif; ?>
        <?php if(isset($_GET["error"])): ?>
            <div class="col-md-8 alert mx-auto alert-danger" role="alert">
                <?= $_GET["error"] ?>
            </div>
        <?php endif; ?>
        <?php if(isset($_GET["eksikbilgi"])): ?>
            <div class="col-md-8 alert mx-auto alert-danger" role="alert">
                <p>Tüm bilgiler Eksiksiz doldurulmalı</p>
            </div>
        <?php endif; ?>
        <?php if(isset($_GET["tarihError"])): ?>
            <div class="col-md-8 alert mx-auto alert-danger" role="alert">
                <p>Geçmişe yönelik kayıt yapılamaz</p>
            </div>
        <?php endif; ?>
    <!-- Form Section -->
    <div class="container h-75">
        <form class="row" action="../Controller/kayitProc.php" enctype="multipart/form-data" method="post">
            <div class="col-md-12 mt-5">
                <label class="h6" for="adSoyad">Ad Soyad:</label>
                <input class="form-control" type="text" id="adSoyad" name="adSoyad">
            </div>
            <div class="col-md-12 mt-5">
                <label class="h6" for="odaNo">Oda No:</label>
                <input class="form-control" type="text" id="odaNo" name="odaNo">
            </div>
            <div class="col-md-12 mt-5">
                <label class="h6" for="odaNo">Telefon Numarası</label>
                <input class="form-control" type="number" id="telNo" name="telNo">
            </div>
            <div class="col-md-12 mt-5">
                <label class="h6" for="girisTarih">Giriş Tarihi:</label>
                <input class="form-control" type="date" id="girisTarih" name="girisTarih">
            </div>
            <div class="col-md-12 mt-5">
                <label class="h6" for="cikisTarih">Çıkış Tarihi:</label>
                <input class="form-control" type="date" id="cikisTarih" name="cikisTarih">
            </div>
            <div class="col-md-12 mt-5">
                <label class="h6" for="kimlikOnyuz">Kimlik Ön Yüz</label>
                <input class="form-control" type="file" id="kimlikOnyuz" name="kimlikOnyuz">
            </div>
            <div class="col-md-12 mt-5">
                <label class="h6" for="kimlikArkaYuz">Kimlik Arka Yüz</label>
                <input class="form-control" type="file" id="kimlikArkaYuz" name="kimlikArkaYuz">
            </div>
            <button class="mx-auto mt-4 col-md-4 btn btn-primary" type="submit">Gönder</button>
        </form>
    </div>

    <!-- Bootstrap JS import link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Change background color on scroll -->
    <script>
        window.addEventListener('scroll', function() {
            var navbar = document.getElementById('navbar');
            if (window.scrollY > 100) {
                navbar.style.backgroundColor = 'rgb(54, 54, 54)';
            } else {
                navbar.style.backgroundColor = '';
            }
        });
    </script>
</body>
</html>
