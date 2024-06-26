<?php require 'header.php' ?>
    <!-- Slide Side -->
    <!-- 
        Resim Slaytları burada gösterilmiştir. Bootstrap ile Js Function ları (geçiş ve tıklama olayları) İd ve Class lara tanımlanmıştır.
    -->
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../picture/otel1.webp" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="../picture/otel2.jpeg" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="../picture/otel3.webp" class="d-block w-100">
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
    <div><p id="egitim" style="font-family: 'Dancing Script', cursive; color: black; font-size: 30pt; font-style: normal; text-align: center; margin: 0;" >Etkinliklerimiz</p></div>
    <!-- Education Side -->
    <!-- 
        Bootstrap ile Card lar eklenmiştir, İçerdeki videolar iFrame ile eklenmiştir.
     -->
    <div class="card-group">
        <div class="card">
            <iframe width="100%" height="350" src="https://www.youtube.com/embed/UCXZFTQ9lUQ" frameborder="0" allowfullscreen></iframe>
            <div style="background-color: rgb(205, 205, 205);" class="card-body">
                <h5 class="card-title">Animasyon Gösterisi</h5>
                <p class="card-text">Muheşem Aydın Animasyon Ekibi ile beraber eğlencenin doruklarına varcaksınız.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
        </div>
    
        <div class="card">
            <iframe width="100%" height="350" src="https://www.youtube.com/embed/Tyh_1ils-uE" frameborder="0" allowfullscreen></iframe>
            <div style="background-color: rgb(205, 205, 205);" class="card-body">
                <h5 class="card-title">Yoga Seansları</h5>
                <p class="card-text">Muhteşem bir ekip ve muhteşem bir Namaste ile huzura çıkan yolda bize eşlik etmeye hazırmısınız? Biz sizi bekliyoruz</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
        </div>
    
        <div class="card">
            <iframe width="100%" height="350" src="https://www.youtube.com/embed/cjkm81D-PNg" frameborder="0" allowfullscreen></iframe>
            <div style="background-color: rgb(205, 205, 205);" class="card-body">
                <h5 class="card-title">Havuz Etkinlikleri</h5>
                <p class="card-text">Animasyon ekiplerimiz sizler havuzda serinlerken sizleri eğlendirecektir..</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div> 
    <!-- About Us Side -->
    <!-- 
        P tag ına verilen font Google font ie import edilmiştir. indexStyle.css sayfasında mevcuttur.
    -->
    <div id="about" class="about">
        <h2 class="mt-5" style="text-align: center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-weight: bold; color: red;">Hakkımızda</h2>
        <p style="font-family: 'Dancing Script', cursive; font-size: 3rem; font-weight: bold; padding: 5rem; text-align: center;">
            2017 Yılında Kurulmuş olan kurumumuz siz değerli misafirlerimizin <br> Daha rahat ve Eğlenceyi sonuna kadar yaşamanız için kurulmuştur. <br>
            Siz ve Aileniz Rahatlığın Eğlencenin Keyfini Çıkarırken Uzman Ekibimiz Sizlerin Konforunu arttırmak için sürekli yanınızda olacaktır.
        </p>
    </div>
    
    <!-- Footer Side -->
    <!-- 
        İconlar Font awesome dan import edilmiştir. İmportu Head tagleri arasında stylesheet link i ile sağlanmıştır.
    -->
<?php require 'footer.php' ?>