<?php
    include "Koneksi.php";
        $email = $_POST['email'];
        $password = md5($_POST['password']);
//        create session
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;

        $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
        $result = mysqli_query($connect, $query);
        $row = mysqli_fetch_assoc($result);

        if($row['level'] == 1){
            echo "<script>alert('Anda berhasil login sebagai Admin.'); window.location.href='admin/index.php'</script>";?>
            <?php
        }else if ($row['level'] == 2){
            echo "<script>alert('Anda berhasil login sebagai User. silahkan menuju'); window.location.href='Home.php'</script>";
            ?>
            <?php
        }else{
            echo "<script>alert('Anda gagal login. silahkan'); window.location.href='login.html'</script>";
            ?>
            <?php
            echo mysqli_error($connect);
        }
?>

