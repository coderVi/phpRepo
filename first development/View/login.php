<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Static/style.css">
</head>
<body>
    <form class="m-5 formB" style="max-width: 45rem;" action="../Controller/process.php" method="POST">
        <h1 class="h1-ticket h2" style="color: #0008;">Hello Welcome To Register Page</h1>
        <?php if(isset($_GET["success"])): ?>
            <div class="alert alert-success" role="alert">
                 <?= $_GET["success"] ?>
            </div>
        <?php endif; ?>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="mail">Email</label>
                <input type="email" class="form-control" id="mail" name="mail" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
                <label for="sifre">Password</label>
                <input type="password" class="form-control" id="sifre" name="sifre" placeholder="Password">
            </div>
        </div>
        <small style="margin-left: 15rem; font-size:14pt; color:pink !important; "><a href="../View/register.php">Üye ol</a></small>
        <br>
        <button type="submit" class="btn btn-primary" style="margin-left: 15rem;" name="process" value="login">Login</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>