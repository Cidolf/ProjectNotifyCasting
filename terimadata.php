<?php
if (isset($_POST['kirim'])) {
    $judul = $_POST['judul'];
    $isi = trim($_POST['isi-pesan']);

    // include database connection file
    include "koneksi.php";

    // Insert user data into table
    $data = "INSERT INTO pengumuman (judul, isi) VALUES('$judul','$isi')";
    $kirim = mysqli_query($conn, $data);

    // Show message when user added
    echo "Sukses";
}
?>