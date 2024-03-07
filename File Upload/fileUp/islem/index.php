<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form action="./process.php" method="post" enctype="multipart/form-data" class="m-5">
        <!-- Form fields go here -->
        <div class="mb-3">
            <label>isim Soy isim</label>
            <input type="text" name="isim">
        </div>
        <div class="mb-3">
            <label>Okul</label>
            <input type="text" name="okul">
        </div>
        <div class="mb-3">
            <label>Resim</label>
            <input type="file" name="picture">
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" name="uploadFile" type="submit">Gönder</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
