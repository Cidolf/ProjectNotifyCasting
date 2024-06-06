<?php
include "koneksi.php";
$query = mysqli_query($conn, "SELECT * FROM kritiksaran ORDER BY id ASC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Kritik Saran</title>
</head>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/kritik.css">

<body>
    <!-- Navbar -->
    <nav class="nav">
        <div class="containerr">
            <div class="logo">
                <a href="">NotifyCast</a>
            </div>
            <div class="navbar">
                <ul>
                    <li><a href="buat_pengumuman.php">Pengumuman</a></li>
                    <li><a href="chat.php">Chat</a></li>
                    <li><a href="kritikSaran.html">Kritik dan Saran</a></li>
                    <li><a href="aboutus.html">About Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Tutup Navbar -->
    <!-- Isi -->
    <div class="kritik-kontent">
        <div class="containerr">
            <div class="judul-isian">

                <h3>Daftar Kritik dan Saran</h3>

            </div>
            <div class="tabel">
                <table class="tabel-isi" border="1" cellspacing="0" width="100%">
                    <tr style="background: #74B243">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Kritik dan Saran</th>
                        <th>Waktu</th>
                    </tr>
                    <?php
                    $no = 1;
                    while ($isi = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $isi['id'] ?>
                            </td>
                            <td>
                                <?php echo $isi['name'] ?>
                            </td>
                            <td>
                                <?php echo $isi['email'] ?>
                            </td>
                            <td>
                                <?php echo $isi['critic'] ?>
                            </td>
                            <td>
                                <?php echo $isi['created_at'] ?>
                            </td>
                        </tr>
                        <?php $no++;
                    } ?>
                </table>
            </div>
        </div>

    </div>
    <!-- Tutup Isi -->
    <!-- Footer -->
    <footer class="footer">
        <div class="containerr">
            <p>Kelompok 5 ADSI | PTIK D 2021</p>
        </div>
    </footer>
    <!-- Tutup Footer -->
    <script src="js/script.js"></script>
</body>

</html>