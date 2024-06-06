<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "notifycast";

$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['critic'])) {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $critic = mysqli_real_escape_string($connection, $_POST['critic']);

    $query = "INSERT INTO kritiksaran (name, email, critic) VALUES ('$name', '$email', '$critic')";

    if (mysqli_query($connection, $query)) {
        echo "Pesan berhasil disimpan.";
    } else {
        echo "Terjadi kesalahan saat menyimpan pesan: " . mysqli_error($connection);
    }
} else {
    echo "Permintaan tidak valid.";
}

mysqli_close($connection);
?>
