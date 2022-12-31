<?php
include '../Koneksi.php';
// Set upload directory
$upload_dir = "uploadGame/";
// Set file path
$icon_path = $upload_dir . basename($_FILES["icon"]["name"]);
$poster_path = $upload_dir . basename($_FILES["poster"]["name"]);

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get values from form
    $nama = $_POST["nama"];
    $icon = $icon_path;
    $poster = $poster_path;

    // Check if file already exists
    if (file_exists($icon_path)) {
        echo "<script>alert('Sorry, file already exists.'); window.location.href='DataGame.php'</script>";
    } else {
        // Attempt to move file to upload directory
        if (move_uploaded_file($_FILES["icon"]["tmp_name"], $icon_path)) {
            // Insert data into table
            $sql = "INSERT INTO game (nama, icon, poster) VALUES ('$nama', '$icon', '$poster')";
            if (mysqli_query($connect, $sql)) {
//                echo "Record added successfully";
                echo "<script>alert('Data berhasil disimpan'); window.location.href='DataGame.php'</script>";
            } else {
                echo "Error adding record: " . mysqli_error($connect);
            }
        } else {
            echo "<script>alert('Sorry, there was an error uploading your file.'); window.location.href='inputGame.php'</script>";
        }
    }
}

if (file_exists($poster_path)) {
    echo "Sorry, file already exists.";
} else {
    if (move_uploaded_file($_FILES["poster"]["tmp_name"], $poster_path)) {
        echo "The file ". basename( $_FILES["poster"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

?>