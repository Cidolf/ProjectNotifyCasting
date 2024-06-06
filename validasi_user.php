<?php
include "koneksi.php";
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $sql_user = mysqli_query($conn, "SELECT * FROM akun WHERE username='$user' AND password='$pass' AND level='user'");
    $result_user = mysqli_num_rows($sql_user);
    if ($result_user > 0) {
        // echo "<script>alert('Login Berhasil');</script>";
        session_start();
        $_SESSION['user'] = $user;
        header("location:dashboard.php");
    } else {
        header("location:index.php");
        // echo "<script>alert('Login Gagal');</script>";
    }
}
?>