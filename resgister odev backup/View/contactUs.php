<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="../Static/indexStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../Assets/logo.png" type="image/x-icon"> <!-- title icon u eklemek için olan linkimiz -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body style="background-image: url(../Assets/uuuu.png); background-size: cover; opacity: 0.9" >
    <!-- Navbar Side -->
    <!-- Navbar ile olan tüm işlemler bu bölümde yapılmıştır,
    Sayfalar arası geçişler buradan yapılmaktadır.
    -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light container-fluid">
        <div class="container-fluid" style="background-color: none;">
            <a class="navbar-brand" href="index.php">
                <img src="../Assets/Ekran görüntüsü 2024-02-13 101014.png" alt="Bootstrap" width="70" height="64">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Anasayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="egitim.php">Eğitimler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">Hakkımızda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactUs.php">Bize Ulaşın</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
    </nav>
    <!-- Form side -->
    <!-- 
        Control inputları ile yapılan form uygulamamsı. action alanında ki belirtilen yola gitmiş olan 
        Form POST ları alınan verileri mail.php alanında ki belirtilen mail adresine gönderir.
    -->
    <form action="../Controller/mail.php" name="contactUs" style="padding: 10%; text-shadow: 2px 2px 5px red;" method="POST" id="contact-form">
        <?php if(isset($_GET["mailOk"])): ?>
        <div style="text-shadow: none; text-align:center;" class="w-50 alert alert-success mx-auto" role="alert">
            <?= $_GET["mailOk"] ?>
        </div>
        <?php endif; ?>
        <?php if(isset($_GET["mailErr"])): ?>

        <div style="text-shadow: none; text-align:center;" class="w-50 alert alert-danger mx-auto" role="alert">
            <?= $_GET["mailErr"] ?>
        </div>
        <?php endif; ?>
        <h2 style="text-align: center;">Bize Ulaşın</h2>
        <input type="hidden" autocomplete="off">                
        <div class="row">
            <div class="col-md-12 input-area">
                <div class="input-group mb-3">
                    <input type="text" name="name" class="form-control contact-form-input" placeholder="Ad Soyad (Zorunlu Alan)">
                </div>
            </div>

            <div class="col-md-12 input-area">
                <div class="input-group mb-3">
                    <input type="text" name="konu" class="form-control contact-form-input" placeholder="Konu">
                </div>
            </div>

            <div class="col-md-6 input-area">
                <div class="input-group mb-3">
                    <input type="email" name="mail" class="form-control contact-form-input" placeholder="your@example.com (Zorunlu Alan)">
                </div>
            </div>

            <div class="col-md-6 input-area">
                <div class="input-group mb-3">
                    <input type="text" id="phone" name="phone" class="form-control contact-form-input" placeholder="Telefon Numaranız (Zorunlu Alan)" inputmode="text" maxlength="16">
                </div>
            </div>

            <div class="col-md-12 input-area">
                <div class="input-group mb-3">
                    <input type="text" name="web" class="form-control contact-form-input" placeholder="Web Siteniz">
                </div>
            </div>

            <div class="col-md-12 input-area">
                <div class="input-group mb-3">
                    <textarea name="mesaj" class="form-control contact-form-input" maxlength="5000" rows="10" placeholder="Mesajınız... (Zorunlu Alan)"></textarea>
                </div>
            </div>

            <div class="col-md-12 input-area">
                <button type="submit" class="btn btn-primary contact-submit-button">Gönder</button>
            </div>
        </div>
    </form>
    <!-- Footer Side -->
    <!-- 
        İconlar Font awesome dan import edilmiştir. İmportu Head tagleri arasında stylesheet link i ile sağlanmıştır.
     -->
    <footer style="bottom: 0;">
        <p>Author: Abdulsamet (CODER VI) YILMAZ<br>
        <a href="mailto:devBlog@info.com">devBlog@info.com</a></p>
        <a href=""><i class="fa fa-brands fa-instagram fa-2xl" style="color: #ffffff;"></i></a>
        <a href=" https://wa.me/+905419070438"><i class="fa fa-brands fa-whatsapp fa-2xl"></i></a>
        <a href="https://call.whatsapp.com/voice/U59Pq5aYDsdgw6LdR65ms7"><i class="fa fa-solid fa-phone fa-2xl"></i></a>
    </footer> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        // Scroll değeri eğer belirli bir değerin üzerindeyse navbar'ın arkaplan rengini değiştir
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