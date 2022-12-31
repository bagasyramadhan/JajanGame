<?php
include 'Koneksi.php';

$email = $_POST['email'];
$password = md5($_POST['password']);
$level = 2;
$nama = 'null';
$alamat = 'null';
$nohp = 'null';

$query = "INSERT INTO user (email, password, level, nama, alamat, no_hp) VALUES ('$email', '$password', '$level', '$nama', '$alamat', '$nohp')";
mysqli_query($connect, $query);

//jika berhasil tampilkan pesan berhasil menggunakan alert javascript
if($query){
    echo "<script>alert('Data berhasil disimpan'); window.location.href='login.html'</script>";
}else{
    echo "<script>alert('Data gagal disimpan'); window.location.href='register.html'</script>";
}
?>