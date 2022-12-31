<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!--      cdm font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->

      <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/bootstrap-5/css/bootstrap.min.css">
    <title>Hello, world!</title>
  </head>
  <body style="background: #505C86">
  <section>
      <nav class="navbar navbar-expand-lg py-3 fixed-top" id="style-nav">
          <div class="container-fluid">
              <a class="ms-lg-5" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    <i class="fa fa-bars fa-2x" aria-hidden="true" style="color: white"></i>
              </a>
<!--              menambahkan image brand-->
                <a class=" ms-lg-3 navbar-brand" href="#" style="color:white; font-weight: bold;"><img src="assets/images/icon-brand.png" alt="" style="width:35px">JAJAN GAME</a>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="border-radius: 30px;">
                    <i class="fa fa-search fa-2x me-lg-3" style="color: white" aria-hidden="true"></i>
                    <i class="fa fa-bell fa-2x me-lg-3" style="color: white" aria-hidden="true"></i>
                    <a href="Login.html" class="lg-btn btn btn-outline-light me-lg-5 col-3">Login</a>
                </form>
              </div>
          </div>
      </nav>
</section>

  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
          <h5 class="offcanvas-title fw-bold" id="offcanvasExampleLabel">JAJANGAME</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
          <div>
             Jika Ingin melakukan transaksi silahkan login terlebih dahulu atau jika belum memiliki akun silahkan daftar terlebih dahulu
          </div>
          <div class="dropdown mt-3">
                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <a href="Login.html"><button class="btn btn-primary" type="button">Login</button>
                    </a>
                    <a href="Register.html"><button class="btn btn-secondary" type="button">Register</button>
                    </a>
                </div>
          </div>
      </div>
  </div>

<!--  carousel-->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner">
          <div class="carousel-item ">
              <img src="assets/images/img-mobileLegends.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
              <img src="assets/images/img-genshin.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item active">
              <img src="assets/images/img-valorant.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
              <img src="assets/images/img-ov.jpg" class="d-block w-100" alt="...">
          </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
      </button>
  </div>

  <div class="container">
      <h2 class="mt-5 fw-bold" style="color: white">Kategori Game</h2>

      <div class="row">
          <?php
          include 'Koneksi.php';
          $query = mysqli_query($connect, "SELECT * FROM game ");
          while ($data = mysqli_fetch_array($query)) {
              ?>
              <div class="col-md-2 col-sm-6 item mt-lg-5"  >
                  <div class="card item-card card-block">
                      <div class="bg-img"><img class="img-card" src="admin/<?php echo $data['icon']; ?>" alt="<?php echo $data['nama']; ?> icon">
                      </div>
                  </div>
              </div>
              <?php
          }
          ?>
      </div>

      <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-5">
            <button class="btn btn-secondary btn-lg me-md-2" style="border-radius: 30px" type="button" id="btn-sty">Lihat Semua</button>
        </div>

      <h2 class="mt-5 fw-bold" style="color: white">JAJANGAME INDONESIA</h2>
      <p style="color: white">Codashop: Website top-up terbesar, tercepat dan terpercaya di Indonesia
          Setiap bulannya, jutaan gamers menggunakan Codashop untuk melakukan pembelian kredit game dengan lancar: tanpa registrasi ataupun log-in,
          dan kredit permainan akan ditambahkan secara instan. Top-up Mobile Legends, Free Fire, Ragnarok M, dan berbagai game lainnya!</p>

<!--membuat teks dengan icon terbagi dalam 2 dalam 1 halaman-->
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-2">
                        <i class="fa fa-clock-o fa-5x" style="color: white" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-10">
                        <h5 style="color: white">Bayar dalam hitungan detik</h5>
                        <p style="color: white">Hanya dibutuhkan beberapa detik saja untuk menyelesaikan pembayaran di Codashop karena situs kami berfungsi dengan baik dan mudah untuk digunakan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-2">
                        <i class="fa fa-truck fa-5x" style="color: white" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-10">
                        <h5 style="color: white">Pengiriman Instan</h5>
                        <p style="color: white">Ketika kamu melakukan top-up di Codashop, item atau barang yang kamu beli akan selalu dikirim ke akun kamu secara instan dan cepat, tanpa tertunda.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-2">
                        <i class="fa fa-credit-card fa-5x" style="color: white" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-10">
                        <h5 style="color: white">Metode Pembayaran Terbaik</h5>
                        <p style="color: white">Kami menawarkan begitu banyak pilihan pembayaran mulai dari potong pulsa, e-wallet, bank transfer, dan pembayaran di mini market terdekat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-lg-5">
                <div class="row">
                    <div class="col-md-2">
                        <i class="fa fa-phone-square fa-5x" style="color:white;" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-10">
                        <h5 style="color: white">Layanan Pelanggan</h5>
                        <p style="color: white">Tim support siap membantu Anda dari pukul 9 pagi hingga 10 malam, 7 hari seminggu. Kirimkan Support Request Form dan kami akan segera menghubungi Anda!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <div class="container-fluid" style="background-color: #f9d423">
   <div class="container">
          <div class="row">
                <div class="col-md-3 mt-lg-3">
                    <h5 class="text-foot">Tentang Kami</h5>
                    <p class="text-foot">Tentang Kami</p>
                    <p class="text-foot">Karir</p>
                    <p class="text-foot">Kontak Kami</p>
                </div>
                <div class="col-md-3 mt-lg-3">
                    <h5 class="text-foot">Bantuan</h5>
                    <p class="text-foot">Cara Bermain</p>
                    <p class="text-foot">Cara Top Up</p>
                    <p class="text-foot">Cara Withdraw</p>
                </div>
                <div class="col-md-3 mt-lg-3">
                    <h5 class="text-foot">Ikuti Kami</h5>
                    <div class="row">
                        <div class="col-1">
                            <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-10 ms-2 mt-1">
                            <p class="text-foot">Facebook</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <i class="fa fa-instagram fa-2x"></i>
                        </div>
                        <div class="col-md-10 ms-2 mt-1">
                            <p class="text-foot">Facebook</p>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-1">
                        <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-10 ms-2 mt-1">
                        <p class="text-foot">Twitter</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
<!--create copyright-->
    <div class="container-fluid" style="background-color: #1c1c1c">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <p class="text-center mt-3" style="color: white">© 2021 JAJANGAME INDONESIA. All Rights Reserved.</p>
                </div>
                </div>
        </div>
    </div>

<!--  create card berwarna kuning dengan container-->

  </body>
  <script src="assets/bootstrap-5/js/bootstrap.bundle.min.js"></script>
  <script src="assets/bootstrap-5/js/bootstrap.min.js"></script>
</html>
