<?php 
    require "../Controller/data.php";
    require "../View/header.php";
?>
<style>
    body{
        background: linear-gradient(to right, blue , aqua);
    }
    form{
        padding: 14.3rem;
    }

    footer{
        padding: 1%;
    }
</style>

<form class="row container-fluid" action="../Controller/blogProcess.php" method="POST">
<div class="form-group">
    <label>Başlık</label>
    <input type="text" class="form-control" name="baslik" placeholder="Başlık">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" name="yazi" style="padding-bottom: 30rem;" placeholder="10000 karakter sınırı vardır." maxlength="10000" rows="3"></textarea>
  </div>
  <button class="mt-5 mx-auto btn btn-primary" style="width: 10rem;" type="submit">Gönder</button>
</form>

<?php require "../View/footer.php";?>