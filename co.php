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

  <section class="payment-form dark">
      <div class="container">
        <center>
        <div class="block-heading">
          <h2>Checkout</h2>
          <p></p>
        </div>
        </center>
        <?php
            $mdl = query("SELECT *,SUM(price_pdt) AS price_mdl,SUM(jml_pdt) AS jml_mdl FROM cart GROUP BY id_pdt");
$price_total = 0;
            foreach($mdl as $row){
                @$product_name[] = $row['name_pdt'] .' ('. $row['jml_mdl'] .') ';
                $product_price = $row['price_mdl'] * $row['jml_mdl'];
                $price_total += $product_price;
            }  
            if(isset($product_name)) {
              @$total_product = implode(', ',@$product_name);
            }
            ?>
          <div class="bg-secondary text-white p-4 rounded-3">
            <p>Produk: <?= $total_product?></p>
            <p>Total Biaya: Rp <?= $price_total?></p>
          </div><br>
        <form action="" method="POST">
          <div class="card-details">
            <h3 class="title">Pesanan</h3><br>
            <div class="row">
              <div class="form-group col-sm-12">
                <label for="card-holder">Nama</label>
                <input id="nama" name="nama" type="text" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
              </div><br>
              <div class="form-group col-sm-12"><br>
                <label for="card-number">Email</label>
                <input id="email" name="email" type="text" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
              </div><br>
              <div class="form-group col-sm-12"><br>
                <label for="card-holder">Alamat</label>
                <input id="alamat" name="alamat" type="text" class="form-control" placeholder="" aria-label="Card Holder" aria-describedby="basic-addon1">
              </div><br>
              <div class="form-group col-sm-12"><br>
                <label for="card-holder">Pembayaran</label><br>
                <div class="form-check" id="pmb">
                  <input class="form-check-input" type="radio" name="pembayaran" value="Transfer Bank" id="pembayaran1">
                  <label class="form-check-label" for="pembayaran1">Transfer Bank</label>
                </div>
                <div class="form-check" id="pmb">
                  <input class="form-check-input" type="radio" name="pembayaran" value="Alfamart" id="pembayaran2">
                  <label class="form-check-label" for="pembayaran2">Alfamart</label>
                </div>
                <div class="form-check" id="pmb">
                  <input class="form-check-input" type="radio" name="pembayaran" value="Indomart" id="pembayaran3">
                  <label class="form-check-label" for="pembayaran3">Indomart</label>
                </div>
                <div class="form-check" id="pmb">
                  <input class="form-check-input" type="radio" name="pembayaran" value="COD" id="pembayaran4">
                  <label class="form-check-label" for="pembayaran4">COD</label>
                </div>
                <div class="form-check" id="pmb">
                  <input class="form-check-input" type="radio" name="pembayaran" value="Karangpakelpay" id="pembayaran5">
                  <label class="form-check-label" for="pembayaran5">Karangpakelpay</label>
                </div>
              </div><br>
              <div class="form-group col-sm-12"><br>
                <label for="card-holder">Pengiriman</label>
                <div class="form-check" id="pmb">
                  <input class="form-check-input" type="radio" name="pengiriman" value="J&T" id="pengiriman1">
                  <label class="form-check-label" for="pengiriman1">J&T</label>
                </div>
                <div class="form-check" id="pmb">
                  <input class="form-check-input" type="radio" name="pengiriman" value="JNE" id="pengiriman2">
                  <label class="form-check-label" for="pengiriman2">JNE</label>
                </div>
                <div class="form-check" id="pmb">
                  <input class="form-check-input" type="radio" name="pengiriman" value="Si Cepat" id="pengiriman3">
                  <label class="form-check-label" for="pengiriman3">Si Cepat</label>
                </div>
                <div class="form-check" id="pmb">
                  <input class="form-check-input" type="radio" name="pengiriman" value="Xpress" id="pengiriman4">
                  <label class="form-check-label" for="pengiriman4">Xpress</label>
                </div>
                <div class="form-check" id="pmb">
                  <input class="form-check-input" type="radio" name="pengiriman" value="TIKI" id="pengiriman5">
                  <label class="form-check-label" for="pengiriman5">TIKI</label>
                </div>
              </div>
              <div class="form-group col-sm-12"><br>
                <button class="btn btn-primary" type="submit" name="kirim">Checkout</button>
              </div>
            </div>
          </div>
        </form>
        <?php
          if (isset($_POST['kirim'])) {
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $alamat = $_POST['alamat'];
            $pembayaran = $_POST['pembayaran'];
            $pengiriman = $_POST['pengiriman'];

            $masuk = mysqli_query($conn, "INSERT INTO co(nama,email,alamat,pembayaran,pengiriman,totalpdt,totalhrg) VALUES('$nama','$email','$alamat','$pembayaran','$pengiriman','$total_product','$price_total')");
            if ($masuk) {
              mysqli_query($conn, "DELETE FROM cart");
              $_SESSION['co']=false;
              echo "<script>
                    window.addEventListener('load', function() { window.location.href=window.location.href;}, false);
                 </script>";
            }
          }
          ?>
      </div>
    </section>

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