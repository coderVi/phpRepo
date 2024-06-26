<?php require 'header.php'?>
    <style>
      body{
        background-color: gray;
      }
    </style>
    <br> <br>
    <h1 class="mt-5" style="text-align: center; background-color: gray;">Ödüllerimiz</h1>
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
            <img src="../picture/odul.webp" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="../picture/odul1.jpg" class="d-block w-100">
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
    <!-- Kartlarımız ı burada tanımladık -->
    <div class="row">
        <div class="row row-cols-1 row-cols-md-2 g-4 d-flex justify-content-center m-5">
            <div class="col-md-3">
              <div class="card">
                <img src="../picture/logo.png" class="card-img-top w-25">
                <div class="card-body">
                  <h5 class="card-title">2020 En Temiz Otel</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, nam. Libero ullam delectus quos quasi, asperiores omnis alias consectetur ex?</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img src="../picture/logo.png" class="card-img-top w-25">
                <div class="card-body">
                  <h5 class="card-title">A+ Sınıfı İlk 5 Otel.</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla labore, quis accusantium iste libero reiciendis ad id voluptates nemo ullam.</p>
                </div>
              </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 g-4 d-flex justify-content-center m-5">
            <div class="col-md-3">
              <div class="card">
                <img src="../picture/logo.png" class="card-img-top w-25">
                <div class="card-body">
                  <h5 class="card-title">2019 Animasyon Ödülü</h5>
                  <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt ipsa necessitatibus tempore, laboriosam nesciunt ipsam iusto earum ea hic dolores.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img src="../picture/logo.png" class="card-img-top w-25">
                <div class="card-body">
                  <h5 class="card-title">Spor ve Sağlık Ödülü</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
        </div>
    </div>
    <?php require 'footer.php'?>