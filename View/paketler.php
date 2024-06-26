<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Talt Tiil</title>

    <style>
        #myCarousel .carousel-item .mask {
            position: absolute;
            top: 0;
            left:0;
            height:100%;
            width: 100%;
            background-attachment: fixed;
        }
        #myCarousel h4{
            font-size:50px;
            margin-bottom:15px;
            color:#FFF;
            line-height:100%;
            letter-spacing:0.5px;
            font-weight:600;
        }
        #myCarousel p{
            font-size:18px;
            margin-bottom:15px;
            color:#d5d5d5;
        }
        #myCarousel .carousel-item a{background:#F47735; font-size:14px; color:#FFF; padding:13px 32px; display:inline-block; }
        #myCarousel .carousel-item a:hover{background:#394fa2; text-decoration:none;  }

        #myCarousel .carousel-item h4{-webkit-animation-name:fadeInLeft; animation-name:fadeInLeft;} 
        #myCarousel .carousel-item p{-webkit-animation-name:slideInRight; animation-name:slideInRight;} 
        #myCarousel .carousel-item a{-webkit-animation-name:fadeInUp; animation-name:fadeInUp;}
        #myCarousel .carousel-item .mask img{-webkit-animation-name:slideInRight; animation-name:slideInRight; display:block; height:auto; max-width:100%;}
        #myCarousel h4, #myCarousel p, #myCarousel a, #myCarousel .carousel-item .mask img{-webkit-animation-duration: 1s;
            animation-duration: 1.2s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }
        #myCarousel .container {max-width: 1430px;  }
        #myCarousel .carousel-item{height:100%; min-height:550px; }
        #myCarousel{position:relative; z-index:1; background:url(https://i.imgur.com/6axE29k.jpg) center center no-repeat; background-size:cover; }

        .carousel-control-next, .carousel-control-prev{height:40px; width:40px; padding:12px; top:50%; bottom:auto; transform:translateY(-50%); background-color: #f47735; }


        .carousel-item {
            position: relative;
            display: none;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
            transition: -webkit-transform .6s ease;
            transition: transform .6s ease;
            transition: transform .6s ease,-webkit-transform .6s ease;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000px;
            perspective: 1000px;
        }
        .carousel-fade .carousel-item {
            opacity: 0;
            -webkit-transition-duration: .6s;
            transition-duration: .6s;
            -webkit-transition-property: opacity;
            transition-property: opacity
        }
        .carousel-fade .carousel-item-next.carousel-item-left, .carousel-fade .carousel-item-prev.carousel-item-right, .carousel-fade .carousel-item.active {
            opacity: 1
        }
        .carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-right.active {
            opacity: 0
        }
        .carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-next, .carousel-fade .carousel-item-prev, .carousel-fade .carousel-item-prev.active, .carousel-fade .carousel-item.active {
            -webkit-transform: translateX(0);
            -ms-transform: translateX(0);
            transform: translateX(0)
        }
        @supports (transform-style:preserve-3d) {
            .carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-next, .carousel-fade .carousel-item-prev, .carousel-fade .carousel-item-prev.active, .carousel-fade .carousel-item.active {
            -webkit-transform:translate3d(0, 0, 0);
            transform:translate3d(0, 0, 0)
            }
        }
        .carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-next, .carousel-fade .carousel-item-prev, .carousel-fade .carousel-item-prev.active, .carousel-fade .carousel-item.active {
            -webkit-transform: translate3d(0,0,0);
            transform: translate3d(0,0,0);
        }


        
        @-webkit-keyframes fadeInLeft {
        from {
            opacity: 0;
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0);
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
        }

        @keyframes fadeInLeft {
        from {
            opacity: 0;
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0);
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
        }

        .fadeInLeft {
        -webkit-animation-name: fadeInLeft;
        animation-name: fadeInLeft;
        }

        @-webkit-keyframes fadeInUp {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
        }

        @keyframes fadeInUp {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
        }

        .fadeInUp {
        -webkit-animation-name: fadeInUp;
        animation-name: fadeInUp;
        }

        @-webkit-keyframes slideInRight {
        from {
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
            visibility: visible;
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
        }

        @keyframes slideInRight {
        from {
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
            visibility: visible;
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
        }

        .slideInRight {
        -webkit-animation-name: slideInRight;
        animation-name: slideInRight;
        }

        .arp_allcolumnsdiv {
        display: flex;
        width: 95%;
        justify-content: space-between;
        }

        .arp_allcolumnsdiv div {
        flex: 1;
        border: 1px solid darkcyan;
        padding: 8px;
        }
        table th{
            padding:1vh 25vh 1vh 25vh;
            border-bottom: 2px solid black;
            background-color: purple;
            color: white;
            text-align: center;
        }
        table td{
            padding:1vh 30vh 1vh 30vh;
            border-bottom: 2px solid black;
            text-align: center;
        }

        .arp_allcolumnsdiv h4{
            text-align: center !important;
        }
        .arp_allcolumnsdiv .oz2:hover {
            h4{
                color: red;
            }
            table th{
            border-bottom: 2px solid black;
            text-align: center;
            background-color: white;
            color: black;
            }

            table td{
                border-bottom: 2px solid black;
                text-align: center;
                background-color: purple;
                color: white;
            }
        }

        footer{
            text-align: center;
            padding: 3px;
            background-color: rgb(54, 54, 54);
            color: white;
            list-style: none !important;
            text-decoration: none !important;
        }

        footer i{
            color: white;
            margin-left: 1.5rem;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }
        .nav-link{
            color: black;
        }



    </style>
</head>
<body>
    <nav style="background-color: gray;" id="navbar" class="navbar navbar-expand-lg container-fluid">
        <div class="container-fluid">
            <a href="index.php">
                <img src="../picture/logo.png" alt="Bootstrap" width="70" height="64">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="font-size: 20pt;">≡</span>
            </button>
                <div class="collapse navbar-collapse d-lg-flex justify-content-center mx-auto" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a id="navLink" class="nav-link"  aria-current="page" href="index.php">Anasayfa</a>
                        </li>
                        <li class="nav-item">
                            <a id="navLink" class="nav-link" href="egitim.php">Eğitimler</a>
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
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="mask flex-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-7 col-12 order-md-1 order-2">
                                <h4>Araba<br>
                                    Müzesi</h4>
                                <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                                    necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
                            </div>
                            <div class="col-md-5 col-12 order-md-2 order-1"><img src="../picture/molumen_GAZ_21_1.svg" class="mx-auto mt-5" alt="slide"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="mask flex-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-7 col-12 order-md-1 order-2">
                                <h4>Binicilik</h4>
                                <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                                    necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
                            </div>
                            <div class="col-md-5 col-12 order-md-2 order-1"><img src="../picture/leaping-1837496_1280.png" class="mx-auto mt-5" alt="slide"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="mask flex-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-7 col-12 order-md-1 order-2">
                                <h4>Tiyatro ve <br>
                                    Şiir Etkinlikleri</h4>
                                <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                                    necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
                            </div>
                            <div class="col-md-5 col-12 order-md-2 order-1"><img src="../picture/mosses-pluma-2-color.svg" class="mx-auto mt-5" alt="slide"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="arp_allcolumnsdiv m-5">
        <div class="oz1">
            <img class="w-100" src="../picture/logo.png">
            <h4>Özellikler</h4>
            <table class="table" style="border: 2px solid black;">
                    <tr>
                        <th>Kahvaltı, Öğle Yemeği ve Akşam Yemeği</th>
                    </tr>
                    <tr>
                        <td>Araba Müzesi Gezisi</td>
                    </tr>
                    <tr>
                        <th>Şiir ve Tiyatro Etkinlikleri</th>
                    </tr>
                    <tr>
                        <td>At Biniciliği</td>
                    </tr>
                    <tr>
                        <th>Gece Kulübü</th>
                    </tr>
                    <tr>
                        <td>Spor Salonu ve Spa</td>
                    </tr>
            </table>
        </div>
        <div class="oz2">
            <img class="w-100" src="../picture/logo.png">
                <h4>Basic (Düşük) Paket</h4>
                <table class="table" style="border: 2px solid black;">
                        <tr>
                            <th>Kahvaltı</th>
                        </tr>
                        <tr>
                            <td>Ücretli</td>
                        </tr>
                        <tr>
                            <th>Ücretli</th>
                        </tr>
                        <tr>
                            <td>Ücretli</td>
                        </tr>
                        <tr>
                            <th>Ücretsiz 1 içecek</th>
                        </tr>
                        <tr>
                            <td>Ortak Kullanım Alanları</td>
                        </tr>
                </table>
        </div>
        <div class="oz2">
            <img class="w-100" src="../picture/logo.png">
                <h4>Middle (orta) Paket</h4>
                <table class="table" style="border: 2px solid black;">
                        <tr>
                            <th>Kahvaltı ve Akşam Yemeği</th>
                        </tr>
                        <tr>
                            <td>%50 İndirmli + 4 kişilik ailelere 3 bilet sizde 1 bilet bizden</td>
                        </tr>
                        <tr>
                            <th>%50 İndirmli</th>
                        </tr>
                        <tr>
                            <td>%50 İndirmli</td>
                        </tr>
                        <tr>
                            <th>Ücretsiz 3 içecek</th>
                        </tr>
                        <tr>
                            <td>Ortak Kullanım Alanları</td>
                        </tr>
                </table>
        </div>
        <div class="oz2">
            <img class="w-100" src="../picture/logo.png">
                <h4>Premium (Üst) Paket</h4>
                <table class="table" style="border: 2px solid black;">
                        <tr>
                            <th>Kahvaltı, Öğle Yemeği ve Akşam Yemeği</th>
                        </tr>
                        <tr>
                            <td>Ücretsiz</td>
                        </tr>
                        <tr>
                            <th>Ücretsiz</th>
                        </tr>
                        <tr>
                            <td>Ücretsiz</td>
                        </tr>
                        <tr>
                            <th>Ücretsiz 5 İçecek</th>
                        </tr>
                        <tr>
                            <td>Ortak Alanlar + Masaj ve Personel Trainer</td>
                        </tr>
                </table>
        </div>
    </div>

     <!-- Form side -->
    <!-- 
        Control inputları ile yapılan form uygulamamsı. action alanında ki belirtilen yola gitmiş olan 
        Form POST ları alınan verileri mail.php alanında ki belirtilen mail adresine gönderir.
    -->
    <form action="../Controller/mail.php" style="padding: 10%; text-shadow: 2px 2px 5px red;" method="POST" id="contact-form">
        <input type="hidden" name="referer" value="Satın Alım Sayfası">
        <?php if(isset($_GET["paketOk"])): ?>
        <div style="text-shadow: none; text-align:center;" class="w-50 alert alert-success mx-auto" role="alert">
            <?= $_GET["paketOk"] ?>
        </div>
        <?php endif; ?>
        <?php if(isset($_GET["paketErr"])): ?>
        <div style="text-shadow: none; text-align:center;" class="w-50 alert alert-danger mx-auto" role="alert">
            <?= $_GET["paketErr"] ?>
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
                    <input type="number" id="phone" name="phone" class="form-control contact-form-input" placeholder="Telefon Numaranız (Zorunlu Alan)" inputmode="text" maxlength="16">
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
                <button type="submit" name="process" value="paket" class="btn btn-primary contact-submit-button mx-auto">Gönder</button>
            </div>
        </div>
    </form>

    <footer>
        <p>Author: Abdulsamet (CODER VI) YILMAZ<br>
        <a href="mailto:devBlog@info.com">devBlog@info.com</a></p>
        <a href=""><i class="fa fa-brands fa-instagram fa-2xl" style="color: #ffffff;"></i></a>
        <a href=" https://wa.me/+905419070438"><i class="fa fa-brands fa-whatsapp fa-2xl"></i></a>
        <a href="https://call.whatsapp.com/voice/U59Pq5aYDsdgw6LdR65ms7"><i class="fa fa-solid fa-phone fa-2xl"></i></a>
    </footer> 

</body>
</html>

    <!-- Bootstrap JS ve jQuery eklemeleri burada -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Diğer scriptleriniz burada -->
    <script>
        $(document).ready(function(){
            $('#myCarousel').carousel({
                interval: 3000
            });
        });

        // Scroll olay dinleyicileri burada
        window.addEventListener('scroll', function() {
            var navbar = document.getElementById('navbar');
            if (window.scrollY > 100) {
                navbar.style.backgroundColor = 'rgb(54, 54, 54)';
            } else {
                navbar.style.backgroundColor = '';
            }

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
</body>
</html>

