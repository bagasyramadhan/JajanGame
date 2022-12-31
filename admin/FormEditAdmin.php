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
                // ambil data user yang akan diedit
                $query = "SELECT * FROM user WHERE id = $id";
                $result = mysqli_query($connect, $query);
                $user = mysqli_fetch_assoc($result);
                ?>

                <form method="post" action="editAdmin.php">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $user['nama']; ?>" placeholder="Masukkan nama">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $user['alamat']; ?>" placeholder="Masukkan alamat">
                    </div>
                    <div class="form-group">
                        <label for="nohp">Nomor Telepon</label>
                        <input type="text" class="form-control" id="nohp" name="nohp" value="<?php echo $user['no_hp']; ?>" placeholder="Masukkan nomor telepon">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $user['email']; ?>" placeholder="Masukkan email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" value="<?php echo $user['password']; ?>" name="password" placeholder="Masukkan password">
                    </div>
                    <div class="form-group">
                        <label for="level">Level</label>
                        <select class="form-control" id="level" name="level">
                            <option value="1" <?php if ($user['level'] == 1) echo "selected"; ?>>Admin</option>
                            <option value="2" <?php if ($user['level'] == 2) echo "selected"; ?>>User</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>