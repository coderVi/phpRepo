<?php require 'header.php'?>
    <!-- Slide Side -->
    <!-- 
        Resim Slaytları burada gösterilmiştir. Bootstrap ile Js Function ları (geçiş ve tıklama olayları) İd ve Class lara tanımlanmıştır.
    -->
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../Assets/gdsc1.jpg"class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="../Assets/sLearn.jpg" class="d-block w-100">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Tablo kullanarak yapılmış olan eğitim bilgilendirme side ı -->
    <h2 class="h4 text-center mt-5">Yüz yüze eğitimlerimiz</h2>
    <p class="text-center mt-1 blockquote-footer">Bu Bölümde Sadece Yüz Yüze Eğitimler Mevcuttur</p>
    <table class="table w-50 border text-center mx-auto">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Eğitim Adı</th>
                <th scope="col">Eğitmen Adı</th>
                <th scope="col">Eğitim Yeri</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>C# 101</td>
                <td class="text-muted"><b>Engin DEMİROĞ</b></td>
                <td>Üsküdar/İstanbul</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Scala Fonksonel Programlama</td>
                <td class="text-muted"><b>Eren ÖZEL</b></td>
                <td>Kadıköy/İstanbul</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>PHP 101</td>
                <td class="text-muted"><b>Abdülsamet YILMAZ</b></td>
                <td>Küçükçekmece/İstanbul</td>
            </tr>
        </tbody>
    </table>
    <br><hr>
    <h2 class="h4 text-center mt-5">Online eğitimlerimiz</h2>
    <p class="text-center mt-1 blockquote-footer">Bu Bölümde Sadece Online Eğitimler Mevcuttur</p>
    <table class="table w-50 border text-center mx-auto">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Eğitim Adı</th>
                <th scope="col">Eğitmen Adı</th>
                <th scope="col">Eğitim Linki</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Agile ve Sprint</td>
                <td class="text-muted"><b>ATIL SAMANCIOĞLU</b></td>
                <td><a href="www.google.com/Learning">Google Eğitimler</a></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>PhotoShop</td>
                <td class="text-muted"><b>Tuğba YAVUZ KARATAŞ</b></td>
                <td><a href="www.google.com/Learning">Google Eğitimler</a></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>3D Tasarım ve Grafik</td>
                <td class="text-muted"><b>Göktuğ TUNÇ</b></td>
                <td><a href="www.google.com/Learning">Google Eğitimler</a></td>
            </tr>
        </tbody>
    </table>

    <h3 class="h5 text-muted text-center m-5">Detaylı Bilgi Almak İçin Lütfen <a href="./contact.php" style="color: red;">BURAYA</a> Tıklayınız...</h3>
    <?php require 'footer.php' ?>