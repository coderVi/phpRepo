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
  <body>
    <!-- Navbar Side -->
    <!-- Navbar ile olan tüm işlemler bu bölümde yapılmıştır,
    Sayfalar arası geçişler buradan yapılmaktadır.
    -->
    <nav id="navbar" class="navbar navbar-expand-lg container-fluid">
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
                        <li class="nav-item dropdown">
                            <a id="navLink" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Giriş İşlemleri
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./login.php">Giriş Yap</a></li>
                                <li><a class="dropdown-item" href="./register.php">Üye Ol</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>