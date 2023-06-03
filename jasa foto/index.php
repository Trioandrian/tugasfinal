<?php
// Verifikasi apakah admin telah login
session_start();
if (!isset($_SESSION['admin_logged_in']) && !isset($_SESSION['user_login'])) {
    // Admin belum login
    // Redirect ke halaman login
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- native css -->
    <link rel="stylesheet" href="style.css">
    <title>Landing Page</title>
</head>
<body>
    <!-- nav -->
    <nav>
        <div class="logo">
            <h5>Logo</h5>
        </div>
        <ul>
          <li><a href="index.php">Beranda</a></li>
          <li><a href="#">Tentang</a></li>
          <li><a href="#">Layanan</a></li>
          <li><a href="#">Kontak</a></li>
          <?php
          if (isset($_SESSION['admin_logged_in'])) {
              // Tampilkan menu admin
              echo '<li><a href="admin.php">Menu Admin</a></li>';
          }
          ?>
        </ul>
      </nav>
    <!-- end nav -->
    <!-- main -->
    <div class="flex">
        <div class="item">
            <h1>Picture Perfect Moments, Just a Click Away</h1>
            <p>"Hadirkan Keajaiban dalam Setiap Potret dengan Layanan Sewa Foto Kami!"</p>
            <button id="contactme"><a href="pesan.php">Hire Me</a></button>
        </div>
        <div >
            <div class="rounded">
                <img src="asset/img/fotogarfer.png" width="400px" alt="">
            </div>

        </div>
    </div>

    <!-- tentang kami -->
    <div class="about-me">
        <h1>Tentang Kami</h1>
        <div class="d-flex">
            <img src="asset/img/ilustrasikamaera.png" alt="Fotografer" width="200px" class="col-2">
            <p  class="col-1">
                Selamat datang di Fotografer XYZ! Kami adalah tim fotografer profesional yang berdedikasi untuk menangkap momen-momen berharga dalam hidup Anda.
                Dengan pengalaman kami yang luas dan keahlian dalam berbagai jenis fotografi, kami siap mengabadikan momen indah dan mengesankan bagi Anda.
                Kualitas dan kepuasan pelanggan adalah prioritas utama kami.
                Kami menghadirkan hasil foto yang berkualitas tinggi dan kreatif dengan menggunakan peralatan fotografi terkini.
                Apapun momen yang ingin Anda abadikan, seperti pernikahan, keluarga, potret, atau acara khusus lainnya, kami siap membantu Anda menciptakan kenangan abadi melalui fotografi.
            </p>
        </div>
    </div>
    <!-- end tentang kami -->
    
</body>
</html>