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
            <img src="../Assets/logo.png" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="../Assets/slide2.png" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="../Assets/slide3.png" class="d-block w-100">
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
    <div><p id="egitim" style="font-family: 'Dancing Script', cursive; color: black; font-size: 30pt; font-style: normal; text-align: center; margin: 0;" >Eğitimlerimiz</p></div>
    <!-- Education Side -->
    <!-- 
        Bootstrap ile Card lar eklenmiştir, İçerdeki videolar iFrame ile eklenmiştir.
     -->
    <div class="card-group">
        <div class="card">
            <iframe width="100%" height="350" src="https://www.youtube.com/embed/2EkMrrX9sYY" frameborder="0" allowfullscreen></iframe>
            <div style="background-color: rgb(205, 205, 205);" class="card-body">
                <h5 class="card-title">C# Eğitimi</h5>
                <p class="card-text">Engin Demiroğ hocamızın 5 saatlik C# eğitim kampı, aynı oynatma listesinde detaylı eğitimi mevcuttur.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
        </div>
    
        <div class="card">
            <iframe width="100%" height="350" src="https://www.youtube.com/embed/-XfPd-cQRuo" frameborder="0" allowfullscreen></iframe>
            <div style="background-color: rgb(205, 205, 205);" class="card-body">
                <h5 class="card-title">Java Eğitimi</h5>
                <p class="card-text">Engin Demiroğ hocamızın Detaylı Java eğitimi, ders saatleri uzun olmasına rağmen konu anlatımı yapılırken eksik nokta bırakılmamıştır.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
        </div>
    
        <div class="card">
            <iframe width="100%" height="350" src="https://www.youtube.com/embed/PVTa1HZwLGw" frameborder="0" allowfullscreen></iframe>
            <div style="background-color: rgb(205, 205, 205);" class="card-body">
                <h5 class="card-title">PHP Dersleri</h5>
                <p class="card-text">PHP Türkiye topluluğunun hazırlamış olduğu Sıfırdan başlayıp orta seviyeye kadar yetiştiren bir oynatma listesidir.</p>
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
            2024 Yılı Şubat Ayında Kurulmuş olan Kurumumuz yazılım ve tasarım dünyasında ki kişilerin <br>
            bir biri ile ağ kurup tecrübelerini ortak bir platformda paylaşmalarını hedeflemektedir. Geliştirici dünyasına ve aramıza Hoşgeldiniz...
        </p>
    </div>
    
    <!-- Footer Side -->
    <!-- 
        İconlar Font awesome dan import edilmiştir. İmportu Head tagleri arasında stylesheet link i ile sağlanmıştır.
    -->
<?php require 'footer.php' ?>