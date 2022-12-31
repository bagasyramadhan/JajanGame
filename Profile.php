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
    <title>Hello, world!</title>
</head>
<body style="background: #505C86">
<section>
    <nav class="navbar navbar-expand-lg py-3 fixed-top" id="style-nav">
        <div class="container-fluid">
            <a class=" ms-lg-3 navbar-brand ms-lg-5" href="Home.php" style="color:white; font-weight: bold;"><img src="assets/images/icon-brand.png" alt="" style="width:35px">JAJAN GAME</a>
        </div>
    </nav>
</section>



<div class="container">
    <!--    create card bedara pada sisi tengah halaman horizontal maupun vertical-->
    <div class="row justify-content-center align-items-center" style="height: 100vh">
        <div class="col-12 col-md-8 col-lg-2 col-xl-9">
            <div class="card-body p-5 mt-5">
                <h4 class="txt-lg text-center mb-3 fw-bold">Profile</h4>
<!--                create profifle img rounded 50%-->
                <div class="d-flex justify-content-center">
                    <img src="assets/images/profile.jpg" alt="" class="rounded-circle" style="width: 150px">
                </div>
<!--                cretae input text email disable-->
                <div class="form-floating mt-5">
                    <?php
                    include 'Koneksi.php';
                    $query = mysqli_query($connect, "SELECT * FROM user Where level = 1 limit 1");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <input type="email" class="form-control" id="floatingInput" placeholder=" " value="<?php echo $data['email']?>" style="border-radius:30px;" disabled>
                    <label for="floatingInput">Email</label>

<!--                        create button exit dan beri pertanyaan apakah yakin ngin keluar-->
                    <div class="d-grid gap col-md-2 mt-3">
                        <a href="index.php" class="btn btn-danger" style="border-radius:30px;" onclick="return confirm('Apakah anda yakin ingin keluar?')">Exit</a>
                    </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
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
<script src="assets/bootstrap-5/js/bootstrap.bundle.min.js"></script>
<script src="assets/bootstrap-5/js/bootstrap.min.js"></script>
</html>
