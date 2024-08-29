<?php
session_start();
include "function.php";
if(!isset($_SESSION["login"])){
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-Karangpakel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Day - v4.10.0
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">karangpakel@gmail.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +62 831 6445 0789
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="ti-whatsapp"><i class="bi bi-whatsapp"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">E-Karangpakel</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li class="dropdown"><a href="#kategori"><span>Kategori</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="index.php#makanan">Makanan</a></li>
              <li><a href="index.php#minuman">Minuman</a></li>
              <li><a href="index.php#kerajinan">Kerajinan</a></li>
            </ul>

          </li>
          </li>
          <li><a class="nav-link scrollto" href="index.php#promo">Promo</a></li>
          <li><a class="nav-link scrollto " href="index.php#berita">Berita</a></li>
          <li><a class="nav-link scrollto" href="index.php#video">Video</a></li>
          <li><a class="nav-link scrollto" href="index.php#contact">Contact</a></li>
          <li><a href="cart.php" class=""><i class="bi bi-basket"></i></a></li>
          <li class="dropdown"><a href="#home"><span>Akun</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="login.php">Login</a></li>
              <li><a href="register.php">Register</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

  <section class="h-100" style="background-color: #eee;">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-10">

        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3 class="fw-normal mb-0 text-black">Keranjang</h3>
          <div>
            <p class="mb-0"></p>
          </div>
        </div>
        <?php
            $crt = query("SELECT *,SUM(price_pdt) AS price_crt,SUM(jml_pdt) AS jml_crt FROM cart GROUP BY id_pdt"); 
            if(!$crt){
          $_SESSION['co'] = false;
          echo '<div class="text-center"><h1 >Tidak ada barang di keranjang <a class="text-primary"href="./">Silahkan berbelanja kembali</a></h1></div>';  
        }
        else{
              $_SESSION['co'] = true;
   
        }
            foreach ($crt as $row):
            ?>
        
        <div class="card rounded-3 mb-4" style="font-size:large">
          <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-md-2 col-lg-2 col-xl-2">
                <img src="assets/img/<?= $row['foto_pdt'];?>" 
                class="img-fluid rounded-3" alt="">
              </div>
              <div class="col-md-3 col-lg-3 col-xl-3">
                <p class="lead fw-normal mb-2" style="font-size:large"><?=$row['id_pdt'];?></p>
              </div>
              <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                <form action="" method="post">
                <input type="number" class="d-none" name="id_pdt" value="<?=$row['id_pdt'];?>">
                <input style="font-size:large" id="form1" min="1" name="quantity" value="<?=$row['jml_crt'];?>" type="number" 
                class="form-control form-control-sm"/>
              </div>
              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                <h5 class="mb-0" style="font-size:large">Rp <?= $row['price_crt'];?></h5>
              </div>
              <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                  </form>
              </div>
           </div>
          </div>
        </div>
        <?php endforeach;?>
        <?php
        if(isset($_POST['upd'])){
            $update_value = $_POST['quantity'];
            $update_id = $_POST['id_pdt'];
            $realprice = query("SELECT price_pdt FROM product WHERE id_pdt=$update_id");
            foreach($realprice as $row){
                $harga = $row['price_pdt'];
                $up=mysqli_query($conn, "UPDATE cart SET jml_pdt = '$update_value',price_pdt = $harga*$update_value WHERE id_pdt = '$update_id'");
            }
            if($up){
                echo "<script>
                    window.addEventListener('load', function() { window.location.href=window.location.href;}, false);
                 </script>";
            };
          
         };
         if(!$crt){
          $dnone = "d-none";
  }
        ?>
        <div class="card <?= $dnone;?>">
          <div class="card-body d-flex justify-content-between">
          <a href="co.php" name="checkout" class="btn btn-warning btn-block btn-lg">Checkout</a>
            
            <?php
            $crt = query("SELECT SUM(price_pdt) AS price_crt FROM cart");
            foreach($crt as $row):
            ?>
            <p>Total: <b>Rp <?= $row['price_crt'];?></b></p>
            <?php    
            endforeach;
            ?>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

  </main><!-- End #main -->

 <!-- ======= Footer ======= -->
 <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>E-Karangpakel</h3>
              <p>
                Jl. Kyai Abdul Wahab No. 18, Ngampel, Kendal<br>
                <strong>Phone:</strong> +62 831 6445 0789<br>
                <strong>Email:</strong> karangpakel@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Deskripsi</h4>
            <p>E-Karangpakel merupakan web penjualan online UMKM Desa Karangpakel, Truck, Klaten. Shop ini menjual berbagai macam makanan, minuman, dan kerajinan hasil produksi sendiri warga Desa Karangpakel.</p>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; COPYRIGHT 2022 || A11.2022.14506 || ERNA AMALIA WIDHIYANTI
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/day-multipurpose-html-template-for-free/ -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>