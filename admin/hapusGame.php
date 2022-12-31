<?php
include '../Koneksi.php';

//hapus data Game dan data yang ada di directory
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM game WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    $icon = $row['icon'];
    $poster = $row['poster'];
    $sql = "DELETE FROM game WHERE id = '$id'";
    if (mysqli_query($connect, $sql)) {
        unlink($icon);
        unlink($poster);
        echo "<script>alert('Data berhasil dihapus'); window.location.href='DataGame.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
}
?>