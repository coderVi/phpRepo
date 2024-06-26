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
            <img src="../picture/sporSauna.jpg"class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="../picture/sporSauna2.jpg" class="d-block w-100">
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
    <h2 class="h4 text-center mt-5">Spor Salonu Saatleri</h2>
    <p class="text-center mt-1 blockquote-footer">Bu saatler dışında hijyen kuralları gereği temizlik için kullanıma kapalıdır.</p>
    <table class="table w-50 border text-center mx-auto">
        <thead class="thead-light">
            <tr>
                <th scope="col">Hafta İçi</th>
                <th scope="col">Cumartesi</th>
                <th scope="col">Pazar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>07:00 - 24:00</td>
                <td class="text-muted"><b>09:00 - 21:00</b></td>
                <td>12:00 - 20:00</td>
            </tr>
        </tbody>
    </table>
    <br><hr>
    <h2 class="h4 text-center mt-5">Hamam ve Spa Saatleri</h2>
    <p class="text-center mt-1 blockquote-footer">Bu saatler dışında hijyen kuralları gereği temizlik için kullanıma kapalıdır.</p>
    <table class="table w-50 border text-center mx-auto">
    <thead class="thead-light">
            <tr>
                <th scope="col">Hafta İçi</th>
                <th scope="col">Cumartesi</th>
                <th scope="col">Pazar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>07:00 - 01:00</td>
                <td class="text-muted"><b>09:00 - 22:00</b></td>
                <td>08:00 - 21:00</td>
            </tr>
        </tbody>
    </table>

    <h3 class="h5 text-muted text-center m-5">Detaylı Bilgi Almak İçin Lütfen <a href="contactUs.php" style="color: red;">BURAYA</a> Tıklayınız...</h3>
    <?php require 'footer.php' ?>