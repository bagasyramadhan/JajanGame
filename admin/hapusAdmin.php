<!--php-->
 <?php
 include '../Koneksi.php';
 $id = $_GET['id'];
 $sql = "DELETE FROM user WHERE id = '$id'";
 if (mysqli_query($connect, $sql)) {
     echo "<script>alert('Data berhasil dihapus'); window.location.href='DataAdmin.php'</script>";
 } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($connect);
 }