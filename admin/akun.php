<?php
include "function.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">E-Karangpakel</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="assets/img/foto.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block ps-2">Erna</span>
                <li><a href="logout.php">Logout</a></li>
                </a><!-- End Profile Iamge Icon -->

                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link collapsed" href="index.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <li class="nav-heading">Master</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="produk.php">
                <i class="bi bi-bookmarks-fill"></i>
                <span>Produk</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="berita.php">
                <i class="bi bi-newspaper"></i>
                <span>Berita</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="video.php">
                <i class="bi bi-youtube"></i>
                <span>Video</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="akun.php">
                <i class="bi bi-person"></i>
                <span>Akun</span>
            </a>
        </li>

        <li class="nav-heading">Transaski</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="pesanan.php">
                <i class="bi bi-bag-check-fill"></i>
                <span>Pesanan</span>
            </a>
        </li>
  </li>
</aside><!-- End Components Nav -->

    <main id="main" class="main">

        <section>
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-3">Akun</h4>
                    <a href="tambahakun.php" class="btn btn-primary mb-2">Tambah Akun</a>
                </div>
                <div class="content-wrap">
                    <div class="main">
                        <div class="container">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                      <th scope="col">No</th>
                                      <th scope="col">Username</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Tanggal Dibuat</th>
                                      <th scope="col">Aksi</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    $user = query("SELECT * FROM users");
                                    $i = 1;
                                    foreach($user as $row):
                                    ?>
                                    <tr>
                                      <th scope="row"><?=$i?></th>
                                      <td><?=$row['username']?></td>
                                      <td><?=$row['email_user']?></td>
                                      <td><?=$row['create_date']?></td>
                                      <td><button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"data-bs-target="#editModal<?= $i;?>">Edit</button>
                                      <a href="deleteakun.php?id=<?= $row['id'];?>" class="btn btn-danger btn-sm">Hapus</a></td>
                                    </tr> 
                                    <!-- Modal -->
                              <div class="modal fade" id="editModal<?= $i;?>" tabindex="-1" aria-labelledby="editModalLabel<?= $i;?>"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="editModalLabel<?= $i;?>">Edit Akun</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="" method="POST">
                                    <div class="modal-body">
                                    <div class="form-floating mb-3">
                                      <input id="uname" type="text" class="form-control d-none" name="id" value="<?= $row['id']?>">
                                      <input id="uname" type="text" class="form-control" name="uname" value="<?= $row['username']?>" disabled>
                                      <label for="uname">Username:</label>
                                      <small>Username tidak bisa diganti.</small>
                                    </div>
                                    <div class="form-floating mb-3">
                                      <input id="email" type="email" class="form-control" name="email_user" value="<?= $row['email_user']?>">
                                      <label for="email">Email:</label>
                                    </div>
                                      <div class="form-floating mb-3">
                                      <input id="password" type="password" name="pw" class="form-control">
                                      <label for="password">Password Baru:</label>
                                      </div>
                                      <input type="checkbox"  onclick="showPw()">Show Password
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                      <button type="submit" name="simpan" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
                                    </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                                    <?php
                                    $i++;
                                  endforeach;
                                  if(isset($_POST['simpan'])){
                                    $id = $_POST['id'];
                                    $email = $_POST['email_user'];
                                    $pw = mysqli_real_escape_string($conn,$_POST['pw']);
                                    $pw = password_hash($pw, PASSWORD_DEFAULT);
                  
                                    $edit=  mysqli_query($conn, "UPDATE users SET email_user='$email',pw='$pw' WHERE id='$id'");
                                    if(!$edit){
                                      echo "GAGAl";
                                    }
                                  }
                                  ?>
                                  </tbody>
                            </table>
                            <script>
                                function showPw() {
                                    var x = document.getElementById("password");
                                    if (x.type === "password") {
                                        x.type = "text";
                                    } else {
                                        x.type = "password";
                                    }
                                }
                            </script>


                        </div>
                    </div>
                </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer mt-auto">
        <div class="copyright">
            &copy; COPYRIGHT 2022 || A11.2022.14506 || ERNA AMALIA WIDHIYANTI
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            <a href="https://bootstrapmade.com/"></a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>