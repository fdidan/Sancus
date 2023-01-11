<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/testStyle.css">
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
                    <a class="tentang" href="#">Tentang Web</a>
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
        <?php
        try{
            $pdo = include "koneksi.php";
            echo '<ol type="1">';
            $query = $pdo->prepare("select * from soal order by rand() limit 50");
            $query->execute();
            echo '<ol>';
            while($soal = $query->fetch()){
                echo "<li>";
                echo htmlentities($soal['deskripsi']);
                $query2 = $pdo->prepare("select * from jawaban_bin_smp where id_soal = :id_soal order by rand()");
                $query2->execute(array("id_soal"=> $soal['id_soal']));
                echo '<ol type="A">';
                while($jawaban_bin_smp = $query2->fetch()){
                    echo '<li>';
                    echo '<input type="radio" name="jawaban_bin_smp['.$soal['id_soal'].']" value="'.$jawaban_bin_smp['id_soal'].'"/>';
                    echo htmlentities($jawaban_bin_smp['deskripsi']);
                    echo '</li>';
                }
                echo '</ol>';
                echo '</li>';
            }
            echo'</ol>';
            echo'</ol>';
        }catch(Exception $e){
            echo "Gagal menampilkan pertanyaan.";
            echo "Error : ".$e->getMessage();
        }
        ?>
    </div>
    <!--Content-->
    
</body>
</html>