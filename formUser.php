<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/formUserStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap" rel="stylesheet">
    <title>Test - Sancus</title>
</head>
<body>
    <!--navbar-->
    <div class="wrapper">
        <div class="nav">
            <a class="back-btn" href="home.html"><</a>
            <img class="logo" src="image/logo.png" alt="">
            
            <ul>
                <li>
                    <a class="tentang" href="tentangSancus.html">Tentang Web</a>
                </li>
                <li>
                    <a class="aboutus" href="#">About Us</a>
                </li>
            </ul>
        </div>
    </div>
    <!--navbar-->

    <!--Content-->
    <div class="container">
        <form action="register.php" method="post">
            <h1 class="dark">Form Data Diri</h1>
            <div>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama">
            </div>
            <div class="dark">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="ttl">Tanggal Lahir</label>
                <input type="date" name="ttl">
            </div>
            <div class="dark">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat"/>
            </div>
            <button class="submit" type="submit">Submit</button>
        </form>
    </div>
    <!--Content-->
    
</body>
</html>