<html>
<head>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h4>Edit Data Admin</h4>
            </div>
            <div class="card-body">
                <?php
                include '../Koneksi.php';
                $id = $_GET['id'];
                // ambil data game yang akan diedit
                $query = "SELECT * FROM game WHERE id = $id";
                $result = mysqli_query($connect, $query);
                $game = mysqli_fetch_assoc($result);
                ?>

                <form method="post" enctype="multipart/form-data" action="editGame.php">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="hidden" name="id" value="<?php echo $game['id']; ?>">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $game['nama']; ?>" placeholder="Masukkan nama">
                    </div>
                    <div class="form-group">
                        <label for="icon">Icon</label>
                        <input type="file" class="form-control" id="icon" name="icon" value="<?php echo $game['icon']; ?>">
                        <?php if ($game['icon']) { ?>
                            <img src="<?php echo $game['icon']; ?>" alt="<?php echo $game['nama']; ?> icon" class="img-thumbnail mt-2" style="width: 200px;">
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label for="poster">Poster</label>
                        <input type="file" class="form-control" id="poster" name="poster" value="<?php echo $game['icon']; ?>">
                        <?php if ($game['poster']) { ?>
                            <img src="<?php echo $game['poster']; ?>" alt="<?php echo $game['nama']; ?> poster" class="img-thumbnail mt-2" style="width: 200px;">
                        <?php } ?>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                </form>

            </div>
        </div>
    </div>
</body>
</html>