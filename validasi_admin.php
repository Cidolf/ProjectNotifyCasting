<?php
include "koneksi.php";
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $sql_admin = mysqli_query($conn, "SELECT * FROM akun WHERE username='$user' AND password='$pass' AND level='admin'");
    $result_admin = mysqli_num_rows($sql_admin);
    if ($result_admin > 0) {
        session_start();
        $_SESSION['user'] = $user;
        header("location:dashboard_admin.php");

    } else {
        header("location:index.php");
        // echo "<script>alert('Login Gagal');</script>";
    }
}
?>