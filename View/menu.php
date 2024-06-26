<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../Static/styleMenu.css">
<title>Talt Tiil</title>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap');
  body {
    font-family: 'Lato', sans-serif;
  }
  
  .overlay {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    overflow-x: hidden;
    transition: 0.5s;
  }
  
  .overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
  }

  .overlay-content a:hover{
    color: white;
    text-shadow: 3px 3px 3px red;
  }
  
  .overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
  }
  
  .overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
  }
  
  .overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
  }
  
  @media screen and (max-height: 450px) {
    .overlay a {font-size: 20px}
    .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
    }
  }
</style>

</head>
<body>
<nav class="navbar navbar-dark bg-dark container-fluid">
  <div class="logo">
    <h1 style="color: white; margin-left: 5px;" class="h2">Talt tiil <br> <small style="margin-left: 5px;" class="h5"> Hotel</small></h1>
  </div>
  <div>
  <p style="color: white; font-family: 'Dancing Script', cursive; font-size: 30pt; font-style: normal; ">
    Hos Geldiniz...
  </p>
  </div>
  <span style="font-size:30px;cursor:pointer" onclick="openNav()"><p style="color: white; margin-right:3rem;">&#9776;</p></span>
  <div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
      <a href="login.php">Personel Girişi</a>
      <a href="index.php">Anasayfa</a>
    </div>
  </div>
</nav>

<form class="mx-auto mt-5" style="width: 50%;" action="../Controller/kayit.php" method="post">
    <?php if(isset($_GET["onay"])): ?>
        <div style="text-align: center;" class="alert alert-success" role="alert">
            <?= $_GET["onay"] ?>
        </div>
    <?php endif; ?>

    <?php if(isset($_GET["hata"])): ?>
        <div style="text-align: center;" class="alert alert-danger" role="alert">
            <?= $_GET["hata"] ?>
        </div>
    <?php endif; ?>

    <div class="form-group">
        <label style="margin-left: 20px;" for="exampleFormControlSelect1"><b>Kaç Kişi Konaklamayı Düşünüyorsunuz ?</b></label>
        <select class="form-control" id="exampleFormControlSelect1" name="kisiSayisi">
            <option>Seçiniz...</option>
            <?php for ($i = 1; $i <= 4; $i++): ?>
                <option><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>

    <div class="form-group">
        <label style="margin-left: 20px;"><b>Rezervasyonu Kimin Adına Yapıyorsunuz?</b></label>
        <input class="form-control" type="text" name="adSoyad" placeholder="Ad Soyad">
    </div>

    <div class="form-group">
        <label style="margin-left: 20px;"><b>Telefon Numarası</b></label>
        <input class="form-control" type="text" name="phone" placeholder="0501 111 11 11">
    </div>

    <div class="form-group">
        <label style="margin-left: 20px;" for="exampleFormControlSelect2"><b>Oda Seçiniz</b></label>
        <select class="form-control" id="exampleFormControlSelect2" name="odaNo">
            <option>Seçiniz...</option>
            <!-- Oda seçeneklerini veritabanından alabilirsiniz -->
        </select>
    </div>

    <div class="form-group">
        <label style="margin-left: 20px;" for="exampleFormControlSelect2"><b>Hangi Paketi Düşünüyorsunuz?</b></label>
        <select class="form-control" id="exampleFormControlSelect2" name="paketler">
            <option>Seçiniz...</option>
            <option>Paket İstemiyorum</option>
            <option>Basic (Düşük) Paket</option>
            <option>Middle (orta) Paket</option>
            <option>Premium (Üst) Paket</option>
        </select>
    </div>

    <div class="mt-2">
        <label style="margin-left: 20px;"><b>Giriş Zamanı Seçiniz:</b></label> <br>
        <input class="form-control" type="date" name="giris">
    </div>

    <div>
        <label style="margin-left: 20px;"><b>Çıkış Zamanı Seçiniz:</b></label> <br>
        <input class="form-control" type="date" name="cikis">
    </div>

    <button class=" mt-2 btn btn-primary" type="submit" name="rezervasyon" value="Gönder">Gönder</button>
</form>

<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

document.getElementById("exampleFormControlSelect1").addEventListener('change', function(){
  let selectedValue = this.value;
  let secondSelect = document.getElementById("exampleFormControlSelect2");

  // İkinci select kutusunu temizle
  secondSelect.innerHTML = '<option>Seçiniz...</option>';
  

  if (selectedValue == 1) {
    for (var i = 100; i <= 120; i++) {
      var option = document.createElement('option');
      option.value = i;
      option.text = i;
      secondSelect.appendChild(option);
    }
  } else if (selectedValue == 2) {
    for (var i = 200; i <= 225; i++) {
      var option = document.createElement('option');
      option.value = i;
      option.text = i;
      secondSelect.appendChild(option);
    }
  } else if (selectedValue == 3) {
    for (var i = 300; i <= 325; i++) {
      var option = document.createElement('option');
      option.value = i;
      option.text = i;
      secondSelect.appendChild(option);
    }
  } else if (selectedValue == 4) {
    for (var i = 400; i <= 420; i++) {
      var option = document.createElement('option');
      option.value = i;
      option.text = i;
      secondSelect.appendChild(option);
    }
  }
});
</script>
</body>
</html>
