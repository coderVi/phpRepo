<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Static/style.css">
</head>
<body>
    <form class="m-5 formB" style="max-width: 45rem;" method="post" action="../Controller/process.php">
        <h1 class="h1-ticket h2" style="color: #0008;">Hello Welcome To Register Page</h1>
        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="adSoyad">Name and Surname</label>
                <input type="text" class="form-control" id="adSoyad" name="adSoyad" placeholder="Name Surname">
            </div>

            <div class="form-group col-md-6">
                <label for="mail">Email</label>
                <input type="email" class="form-control" id="mail" name="mail" placeholder="Email">
            </div>

            <div class="form-group col-md-6">
                <label for="sifre">Password</label>
                <input type="password" class="form-control" id="sifre" name="sifre" placeholder="Password">
            </div>

            <div class="form-group col-md-6">
                <label for="passwordRpt">Password Repeat</label>
                <input type="password" class="form-control" id="sifreRPT" name="sifreRPT" placeholder="Password Repeat">
            </div>
        </div> <br>

        

        <br><br>
        <div>
            <button type="submit" class="btn sign btn-primary" name="process" value="register">Sign in</button>
            <a href="../View/login.php" class="btn btn-primary" style="margin-left: 50px">Login Page</a>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>