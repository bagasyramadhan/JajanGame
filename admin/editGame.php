<?php

include '../Koneksi.php';

$target_dir_icon = "uploadGame/";
$target_dir_poster = "uploadGame/";
$icon_path = $target_dir_icon . basename($_FILES["icon"]["name"]);
$poster_path = $target_dir_poster . basename($_FILES["poster"]["name"]);

if (isset($_POST['submit'])) {
    // ambil data dari form
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $icon = $_FILES['icon']['name'];
    $poster = $_FILES['poster']['name'];

    // validasi form (opsional)

    // lakukan proses edit data
    $query = "UPDATE game SET nama = '$nama'";
    if ($icon) {
        $query .= ", icon = '$icon'";
    } elseif (isset($_POST['hapus_icon'])) {
        $query .= ", icon = NULL";
    }
    if ($poster) {
        $query .= ", poster = '$poster'";
    } elseif (isset($_POST['hapus_poster'])) {
        $query .= ", poster = NULL";
    }
    $query .= " WHERE id = $id";
    $result = mysqli_query($connect, $query);

    // unggah file icon dan poster (opsional)
//    raname file icon dan poster dengan nama uploadGame/ didepannya
    $new_target_file_icon = $target_dir_icon . "uploadGame/" . basename($_FILES["icon"]["name"]);
    rename($icon_path, $new_target_file_icon);

    // redirect ke halaman daftar game

//    } elseif (isset($_POST['hapus_icon'])) {
//        // hapus file icon lama
//        unlink($target_dir_icon . $game['icon']);
//    }

    $target_dir_poster = "uploadGame/";
    $target_file_poster = $target_dir_poster . basename($_FILES["poster"]["name"]);
    if ($poster) {
        // unggah file poster baru
        move_uploaded_file($_FILES["poster"]["tmp_name"], $target_file_poster);
    } elseif (isset($_POST['hapus_poster'])) {
        // hapus file poster lama
        unlink($target_dir_poster . $game['poster']);
    }

    if ($result) {
        // proses edit berhasil
        // tampilkan pesan su
        $_SESSION['success'] = "Data game berhasil diedit";
        header("Location: index.php");
    } else {
        // proses edit gagal
        // tampilkan pesan error
        $_SESSION['error'] = "Terjadi kesalahan: " . mysqli_error($connect);
    }
}
?>