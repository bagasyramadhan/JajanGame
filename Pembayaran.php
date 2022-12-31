<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--      cdm font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/bootstrap-5/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/bootstrap-5/css/bootstrap.min.css">
    <title>Hello, world!</title>
</head>
<body style="background: #505C86">
<section>
    <nav class="navbar navbar-expand-lg py-3 fixed-top" id="style-nav">
        <div class="container-fluid">
            <!--              menambahkan image brand-->
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
<div class="container mb-5">
    <div class="row justify-content-center align-items-center" style="height: 90vh">
        <div class="col-12 col-md-5 col-lg-2 col-xl-9">
            <div class="card-body p-5 mt-5">
                <?php
                include 'Koneksi.php';
                $query = mysqli_query($connect, "SELECT * FROM transaksi where id_transaksi ORDER BY id_transaksi DESC LIMIT 1");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <div class="form-group mb-3 col-md-8">
                        <label for="id_item" id="lblname" >ID Transaksi</label>
                        <input type="text" class="form-control" id="id_item" name="id_item" value="<?php echo $data['id_transaksi'] ?>" disabled>
                    </div>

                    <div class="form-group mb-3 col-md-8">
                        <label for="id_item" id="lblname" >Metode Bayar</label>
                        <input type="text" class="form-control" id="id_item" name="id_item" value="<?php echo $data['jenis_pembayaran'] ?>" disabled>
                    </div>

                    <div class="form-group mb-3 col-md-8">
                        <label for="id_item" id="lblname" >Total Bayar</label>
                        <input type="text" class="form-control" id="id_item" name="id_item" value="<?php echo "Rp." ?><?php echo $data['nominal_topup'] ?>" disabled>
                    </div>
                    <?php
                }
                ?>
            </div>
<!--            buat teks Selesaikan pembayaran sebemum posisi tengah-->
            <div class="text-center">
                <h3 class="mt-3" style="color: white; text">Selesaikan Pembayaran Sebelum</h3>
            </div>

<!--            create countdown-->
            <div class="text-center">
                <h1 class="mt-3" style="color: white; text" id="demo">24:00:00</h1>
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
<!--countdown-->
<script>
    // Set the date we're counting down to
    // var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();

    var countDownDate = new Date().getTime() + 24 * 60 * 60 * 1000;
    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("demo").innerHTML = hours + "h "
            + minutes + "m " + seconds + "s ";

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);

</script>
<script src="assets/bootstrap-5/js/bootstrap.bundle.min.js"></script>
<script src="assets/bootstrap-5/js/bootstrap.min.js"></script>
</html>
