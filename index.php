<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Halam web dengan PHP</title>
</head>
<body>
    <div class="content">
        <header>
            <h1 class="judul">Wb Page with PHP</h1>
            <h3 class="deskripsi"> Membuat halaman web dinamis</h3>
        </header>
        <div class="menu">
            <ul>
                <li><a href="index.php?page=home">Home</a></li>
                <li><a href="index.php?page=tentang">Tentang</a></li>
                <li><a href="index.php?page=tutorial">Tutorial</a></li>
                <li><a href="index.php?page=jadwal_sholat">Jadwal Sholat</a></li>
            </ul>
        </div>
        <div class="badan">
            <?php
            if(isset($_GET['page'])){
                $page = $_GET['page'];

                switch($page){
                    case 'home':
                        include 'halaman/home.php';
                        break;
                    case 'tentang':
                        include 'halaman/tentang.php';
                        break;
                    case 'tutorial':
                        include 'halaman/tutorial.php';
                        break;
                    case 'jadwal_sholat':
                        include 'halaman/jadwal_sholat.php';
                        break; 
                        // kalau tidak ada break, dibaca oleh sistem sampai ke bawah
                        default:
                        echo'<center><h3>Maaf halaman tak tersedia ! </h3></center>';
                        break;
                    
                }   
            } else {
                include'halaman/home.php';
            }
            
            
            ?>

        </div>
    </div>
    
</body>
</html>