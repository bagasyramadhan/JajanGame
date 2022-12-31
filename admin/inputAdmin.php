<?php
include '../Koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get values from form
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $nohp = $_POST["no_hp"];
    $email = $_POST["email"];
    $password = md5($_POST ["password"]);
    $level = $_POST["level"];

    $sql = "INSERT INTO user (nama, alamat, no_hp, email, password, level)
    VALUES ('$nama', '$alamat', '$nohp', '$email', '$password', '$level')";
    if (mysqli_query($connect, $sql)) {
        echo "<script>alert('Data berhasil disimpan'); window.location.href='DataAdmin.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
}
?>