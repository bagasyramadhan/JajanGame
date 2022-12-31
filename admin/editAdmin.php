<!-- compare editAdmin-->
<?php
include '../Koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get values from form
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $nohp = $_POST["nohp"];
    $email = $_POST["email"];
    $password = md5($_POST ["password"]);
    $level = $_POST["level"];

     $query = "UPDATE user SET nama = '$nama', alamat = '$alamat', no_hp = '$nohp', email = '$email', password = '$password', level = '$level' WHERE id = $id";
  $result = mysqli_query($connect, $query);

  if ($result) {
    // proses edit berhasil
    // tampilkan pesan sukses dan redirect ke halaman daftar user
    $_SESSION['message'] = "Edit data berhasil.";
    echo "<script>alert('Data berhasil disimpan'); window.location.href='DataAdmin.php'</script>";
  } else {
    // proses edit gagal
    // tampilkan pesan error
    $_SESSION['error'] = "Edit data gagal.";
  }
}
?>