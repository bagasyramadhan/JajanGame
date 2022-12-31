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
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/bootstrap-5/css/bootstrap.min.css">
    <title>Hello, world!</title>
</head>
<body style="background: #505C86">
<section>
    <nav class="navbar navbar-expand-lg py-3 fixed-top" id="style-nav">
        <div class="container-fluid">

            <a class=" ms-lg-5 navbar-brand" href="Home.php" style="color:white; font-weight: bold;"><img src="assets/images/icon-brand.png" alt="" style="width:35px">JAJAN GAME</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="border-radius: 30px;">
                    <i class="fa fa-search fa-2x me-lg-3" style="color: white" aria-hidden="true"></i>
                    <a type="submit" style="border-radius: 30px;" href="Notifikasi.php"><i class="fa fa-bell fa-2x me-lg-3" style="color: white" aria-hidden="true"></i></a>
                    <a type="submit" style="border-radius: 30px;" href="Profile.php"><i class="fa fa-user me-lg-5 fa-2x" style="color: white" aria-hidden="true"></i></a>
                </form>
            </div>
        </div>
    </nav>
</section>

<!--image responsive center-->
    <!-- menampilkan image berdasarkan id yang telah ter get -->

    <div class="row">
          <?php
          include 'Koneksi.php';
          $id = $_GET['id'];
          $query = mysqli_query($connect, "SELECT * FROM game WHERE id = $id");
          while ($data = mysqli_fetch_array($query)) {
              ?>
                 <img src="admin/<?php echo $data['icon']; ?>" class="img-fluid" alt="Responsive image" style="width: 100%; height: 80vh;">

      </div>


<div class="container mb-5">
    <div class="row justify-content-center align-items-center" style="height: 100vh">
        <div class="col-12 col-md-8 col-lg-2 col-xl-9">
            <div class="card-body p-5 mt-5">
                <form action="proses_transaksi.php" method="post">
                <h4 class="txt text-center mb-5 fw-bold" style="" id="txt-judul"><?php echo $data['nama']; ?></h4>
<!--                    membuat variabel yang menyimpan value dari $data['nama']-->
                    <input type="hidden" name="nama_game" value="<?php echo $data['nama']; ?>">

                <?php
              }
              ?>
<!--                create input text nama depan dan nama belakang bersebelahan-->
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-outline mb-4">
                            <input type="text" id="form3Example1" name="game_id" class="form-control form-control-lg" placeholder="Game ID" required/>
                        </div>
                    </div>
                        <div class="col-md-3">
                            <div class="form-outline mb-4">
                                <input type="text" id="form3Example2" name="server_id" class="form-control form-control-lg" placeholder="Server ID" required />
                            </div>
                        </div>
                </div>
<!--                card-->
                <div class="row g-5">
                <?php
                    include 'Koneksi.php';
                    $query = mysqli_query($connect, "SELECT * FROM item");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <div class="ipt-card col-md-3" data-id="1" id="card-click">
                        <div class="kartu row card-body" style="height:80px " id="id_item">
                            <div class="col-md-5">
                            <i class="fa fa-diamond fa-3x" style="color: white" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-6">
                                <p class="txt-dmd"><?php echo $data['diamond'] ?>
                                    <input type="hidden" name="id_item" value="<?php echo $data['id_item']; ?>">
                                    <input type="hidden" name="nominal_topup" value="<?php echo $data['jumlah']; ?>"></p>
                            </div>
                            <p style="color: white">Rp. <?php echo $data['jumlah']; ?></p>
                        </div>
                    </div>
                    <?php
                        }
                        ?>
                </div>
                <p class="txt-pmb mt-5">Pembayaran</p>
                <select class="form-select form-select-lg mb-3" name="pembayaran" aria-label=".form-select-lg example" required>
                    <option selected disabled>Pilih Pembayaran Anda</option>
                    <option value="OVO">OVO</option>
                    <option value="Gopay">Gopay</option>
                    <option value="Shopee Pay">Shopee Pay</option>
                </select>
                <div>
                </div>
                <div class="col-12 d-flex flex-row justify-content-center">
                    <button type="submit" class="tbl_beli btn btn-primary btn-lg mt-4">Beli Sekarang</button>
                </div>
            </div>
            </form>
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


</body>
<script>
    // Ambil button
    const btn = document.getElementById("card-click");

    // Tambahkan event listener pada button
    btn.addEventListener("click", function() {
        // Ubah warna background button
        this.style.backgroundColor = "red";
        this.style.borderRadius = "40px";
    });
</script>
<script src="assets/bootstrap-5/js/bootstrap.bundle.min.js"></script>
<script src="assets/bootstrap-5/js/bootstrap.min.js"></script>
</html>
