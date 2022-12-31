<?php
include 'Koneksi.php';

$id_item = $_POST['id_item'];
$nama_game = $_POST['nama_game'];
$game_id = $_POST['game_id'];
$server_id = $_POST['server_id'];
$nominal_topup = $_POST['nominal_topup'];
$jenis_pembayaran = $_POST['pembayaran'];

$query = "INSERT INTO transaksi (id_item, nama_game, game_id, server_id, nominal_topup, jenis_pembayaran) 
VALUES ('$id_item', '$nama_game', '$game_id', '$server_id', '$nominal_topup', '$jenis_pembayaran')";

//alert jika berhasil
if(mysqli_query($connect, $query)){
    echo "<script>alert('Data berhasil disimpan'); window.location.href='Pembayaran.php'</script>";
}else{
    echo "<script>alert('Data gagal disimpan'); window.location.href='Pembelian.php'</script>";
}

mysqli_query($connect, $query);

?>