<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Talt Tiil Hotel</title>
    <link rel="stylesheet" href="../Static/indexStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../picture/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background: linear-gradient(to right, aqua, blue);
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: gray;
        }

        .navbar img {
            width: 70px;
            height: 64px;
        }

        form {
            margin-top: 20px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
        }

        form label {
            display: block;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <!-- Navbar Section -->
    <nav class="navbar navbar-expand-lg container-fluid">
        <div class="container-fluid">
            <a href="index.php">
                <img src="../picture/logo.png" alt="Bootstrap">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-lg-flex justify-content-center mx-auto" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Anasayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="egitim.php">Spor Ve Spa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">Hakkımızda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactUs.php">Bize Ulaşın</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="paketler.php">Paketler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="musteriKayit.php">Kayıt Ekle</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br> <br><br><br><br><br>
    
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Ad Soyad</th>
            <th scope="col">Oda Numarası</th>
            <th scope="col">Giriş Tarihi</th>
            <th scope="col">Çıkış tarihi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require "../Controller/data.php";
        
        $offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;
        $limit = 25;
        
        $query = "SELECT * FROM tbl_odakayit ORDER BY id DESC LIMIT $limit OFFSET $offset";
        $result = $conn->query($query);
        
        if ($result->num_rows > 0) {
            $count = $offset + 1;
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td scope='row'>" . $count . "</td>";
                echo "<td>" . $row['adSoyad'] . "</td>";
                echo "<td>" . $row['odaNo'] . "</td>";
                echo "<td>" . $row['girisTarih'] . "</td>";
                echo "<td>" . $row['cikisTarih'] . "</td>";
                echo "</tr>";
                $count++;
            }
        } else {
            echo "<tr><td colspan='5'>No records found</td></tr>";
        }
        ?>
    </tbody>
</table>

    <?php
    $totalRecords = $conn->query("SELECT COUNT(*) as total FROM tbl_odakayit")->fetch_assoc()['total'];
    $remainingRecords = $totalRecords - ($offset + $limit);

    // İlk sayfaya dönmek için sonraki ofseti hesapla
    $nextOffset = ($remainingRecords > 0) ? $offset + $limit : 0;

    echo "<a href='kayitListe.php?offset=$nextOffset' class='btn btn-primary'>Sonraki 25 Kayıt</a>";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Change background color on scroll -->
    <script>
        window.addEventListener('scroll', function() {
            var navbar = document.getElementById('navbar');
            if (window.scrollY > 100) {
                navbar.style.backgroundColor = 'rgb(54, 54, 54)';
            } else {
                navbar.style.backgroundColor = '';
            }
        });
    </script>
    </body>
</html>
