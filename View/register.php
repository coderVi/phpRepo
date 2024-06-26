<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Static/style.css">
</head>
<body style="background:linear-gradient(to right, pink,yellow,aqua);">
    <form class="m-5 formB" method="post" action="../Controller/process.php">
        <h1>Hello Welcome To Register Page</h1>
        <div class="form-row">
            <?php if(isset($_GET["error"])): ?>
            <div class="alert alert-danger" role="alert">
                 <?= $_GET["error"] ?>
            </div>
            <?php endif; ?>

            <?php if(isset($_GET["infoErr"])): ?>
            <div class="alert alert-danger" role="alert">
                 <?= $_GET["infoErr"] ?>
            </div>
            <?php endif; ?>

            <div class="form-group col-md-6">
            <?php if(isset($_GET["kAdiErr"])): ?>
                <small class="form-muted"><?= $_GET["kAdiErr"] ?></small>
            <?php endif; ?>
                <label for="adSoyad">Name and Surname</label>
                <input type="text" class="form-control" id="adSoyad" name="adSoyad" placeholder="Name Surname">
            </div>
            <div class="form-group col-md-6">
                <?php if(isset($_GET["mailErr"])): ?>
                    <small class="form-muted eros"><?= $_GET["mailErr"] ?></small>
                <?php endif; ?><br>
                <label for="mail">Email</label>
                <input type="email" class="form-control" id="mail" name="mail" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
                <?php if(isset($_GET["passwdErr"])): ?>
                    <small class="form-muted eros"><?= $_GET["passwdErr"] ?></small>
                <?php endif; ?><br>
                <label for="sifre">Password</label>
                <input type="password" class="form-control" id="sifre" name="sifre" placeholder="Password">
            </div> <br>

            <div class="form-group col-md-6">
                <label for="passwordRpt">Password Repeat</label>
                <input type="password" class="form-control" id="sifreRPT" name="sifreRPT" placeholder="Password Repeat">
            </div>
        </div>
        

        <br>
        <div>
            <button type="submit" class="btn sign btn-primary" name="process" value="register">Sign in</button>
            <a href="../View/login.php" class="btn btn-secondary">Login Page</a>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>