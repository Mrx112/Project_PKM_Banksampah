<?php
require 'system/config/koneksi.php'
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Beranda</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Contrail+One|Raleway" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
  <link rel="shortcut icon" href="asset/internal/img/img-local/favicon.ico">
  <link rel="stylesheet" href="asset/internal/css/style-index1.css">
  <link rel="stylesheet" href="asset/internal/css/style-index2.css">

  <script src="asset/internal/js/preloader.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script>
    $(document).ready(function() {
      $(".preloader").fadeOut();
    })
  </script>

</head>

<body>

  <!--Pre Loader-->
  <div class="preloader">
    <div class="loading">
      <img src="asset/internal/img/img-local/spiner.gif" width="80">
    </div>
  </div>


  <!--Navbar-->
  <header>
    <a href="#" id="logo"></a>
    <nav>
      <a href="#" id="menu-icon"></a>
      <ul id="top-menu">
        <li style="list-style: none; display: inline"></li>
        <li class="active">
          <a href="#">Beranda</a>
        </li>
        <li style="list-style: none; display: inline"></li>
        <li>
          <a href="#foo">Petunjuk</a>
        </li>
        <li style="list-style: none; display: inline"></li>
        <li>
          <a href="#bar">Tim Kami</a>
        </li>
        <li style="list-style: none; display: inline"></li>
      </ul>
    </nav>
  </header>

  <!-- konten1 -->
  <div class="page-wrap">
    <div class="header">
      <div class="box-1">
        <h1 disabled>Bank Sampah Resik Kutha Kota Surakarta</h1>
        <p> Bersih, Sehat sekaligus Berpenghasilan...! </p>
        <br> <br>

        <div class="center">
          <a href="page/login.php" target="_blank">
            <div class="btn" align="center">Login</div>
          </a> <!-- End Btn -->

          <a href="page/register.php">
            <div id="btn2" align="center">Register</div>
          </a> <!-- End Btn2 -->
        </div>
      </div>
    </div>
  </div>
  </div>


  <!--konten2-->
  <div id="foo">
    <section class="team">
      <div class="container">
        <div class="row">
          <h1>TERTARIK BERGABUNG ???</h1>
          <p>Bank sampah Resik Kutha Kota Surakarta adalah organisasi peduli lingkungan yang berlokasi di Jl.Kapten Prakoso No.1, Ngipang, Kec.Banjarsari, Kota Surakarta. Selain bidang bank sampah kami juga berfokus pada pengelolaan sampah, seperti komposting berbasis sampah, kerajinan berbahan baku sampah, dan masih banyak lagi program yang kami kembangkan. Saat ini Bank sampah Resik Kutha Kota Surakarta yang berjumlah lebih dari 100 kepala keluarga. Hal itu menunjukan bahwa warga masyarakat Kota Surakarta sangat antusias dengan adanya program ini, dan tentu Bank sampah Resik Kutha Kota Surakarta mendapatkan perhatian khusus dari warga sekitar. Jika Anda berminat untuk bergabung, silahkan ikuti langkah berikut ini.</p>
        </div>
        <div class="row mgt50px">
          <div class="coloumn">
            <div class="imgBox">
              <img src="asset/internal/img/img-content/1.jpg">
            </div>
            <div class="details">
              <h3>#Tahap1<br><span>Lakukan Pendaftaran</span></h3>
            </div>
          </div>
          <div class="coloumn">
            <div class="imgBox">
              <img src="asset/internal/img/img-content/2.jpg">
            </div>
            <div class="details">
              <h3>#Tahap2<br><span>Pemilahan Sampah</span></h3>
            </div>
          </div>
          <div class="coloumn">
            <div class="imgBox">
              <img src="asset/internal/img/img-content/3.jpg">
            </div>
            <div class="details">
              <h3>#Tahap3<br><span>Penimbangan Sampah</span></h3>
            </div>
          </div>
          <div class="coloumn">
            <div class="imgBox">
              <img src="asset/internal/img/img-content/4.jpg">
            </div>
            <div class="details">
              <h3>#Tahap4<br><span>Mendapat Keuntungan</span></h3>
            </div>
          </div>
          <div style="clear: both;"></div>
        </div>
      </div>
    </section>
  </div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="asset/internal/js/index.js"></script>

  <!--konten maps-->

  <br>
  <div id="bar">
    <div class="row mgt50px">
      <h1 align="center">Lokasi Bank Sampah</h1>
      <br>
      <br>
      <center>
      <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m11!1m3!1d757.6565509920064!2d106.9712354005596!3d-6.302812179318225!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sid!2sid!4v1508568321004" width="1362" height="470" frameborder="0" style="margin-bottom: 0; left: 10px;" allowfullscreen></iframe>
      </center>
    </div>
  </div>

  <!--footer-->
  <footer class="footer-distributed">

    <div class="footer-left">

      <a href="#" id="logo_f"></a>
      <br>

      <p class="footer-links">
      <ul>
        <a href="#">Beranda</a>
        ·
        <a href="#foo">Petunjuk</a>
        ·
        <a href="#bar">Tim Kami</a>
        ·
        </p>

        <p class="footer-company-name">&copy; Bank Sampah Resik Kutha Kota Surakarta | Repost by <a href="https://www.instagram.com/ru_all12" title="ru_all12" target="_blank">adi susilo</a></p>
    </div>

    <div class="footer-center">

      <div>
        <i class="fa fa-map-marker"></i>
        <p><span>Jl. kapten Prakoso, No.1</span> Ngipang, Kec.banjarsari, Kota Surakarta.</p>
      </div>

      <div>
        <i class="fa fa-phone"></i>
        <p><a href="sms:(+62)xxxxxxxxxxxx">(+62)xxxx xxxx xxxx</a></p>
      </div>

      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:xxx_xxxx@gmail.com">xxx_xxxx@gmail.com</a></p>
      </div>

    </div>

    <div class="footer-right">

      <p class="footer-company-about">
<body>
        <span>Kunjungi Sosial Media Kami!</span>
        Untuk yang ingin lebih dekat dan ingin lebih dekat dengan Bank Resik Kutha Kota Surakarta, silahkan kunjungi sosial media kami dibawah ini!
      </p>

      <div class="footer-icons">

        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>

      </div>

    </div>

  </footer>

</body>

</html>