<?php
require_once "db_connect.php";

if (isset($_POST['name']) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $message = $_POST['message'];

    $query = "INSERT INTO messages (name, message) VALUES ('$name', '$message')";

    if (mysqli_query($connection, $query)) {
        echo "Pesan berhasil disimpan.";
    } else {
        echo "Terjadi kesalahan saat menyimpan pesan: " . mysqli_error($connection);
    }
} else {
    echo "Permintaan tidak valid.";
}
?>
