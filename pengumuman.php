<?php
include "koneksi.php";
$query = mysqli_query($conn, "SELECT * FROM pengumuman ORDER BY id_pengumuman DESC LIMIT 4");
$tampil = mysqli_query($conn, "SELECT * FROM pengumuman ORDER BY id_pengumuman DESC LIMIT 1");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengumuman</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/tampil-pengumuman.css">
</head>

<body>
    <nav class="nav">
        <div class="containerr">
            <div class="logo">
                <a href="dashboard.php">NotifyCast</a>
            </div>
            <div class="navbar">
                <ul>
                    <li><a href="">Pengumuman</a></li>
                    <li><a href="chat.html">Chat</a></li>
                    <li><a href="kritikSaran.html">Kritik dan Saran</a></li>
                    <li><a href="aboutus.html">About Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Tutup Navbar -->
    <div class="isi-web">
        <div class="containerr blok">
            <div class="topper">Tampilan Pengumuman</div>
            <div class="box-tampil">
                <?php
                $no = 1;
                while ($isi = mysqli_fetch_array($tampil)) {
                    ?>
                    <div class="judul">
                        <center>
                            <?php echo $isi['judul']; ?>
                        </center>
                    </div>
                    <div class="isi">
                        <?php echo $isi['isi_pengumuman']; ?>
                    </div>
                    <?php $no++;
                } ?>
            </div>
        </div>
        <div class="list-tampil">
            <?php
            $no = 1;
            while ($data = mysqli_fetch_array($query)) {
                ?>
                <div class="box">
                    <div class="judul-box">
                        <?php echo $data['judul']; ?>
                    </div>
                    <div class="deskripsi">
                        <?php echo $data['isi_pengumuman']; ?>
                    </div>
                </div>
                <?php $no++;
            } ?>
            <!-- <div class="box">
                <div class="judul-box">Judul1</div>
                <div class="deskripsi">Paragraf</div>
            </div>
            <div class="box">
                <div class="judul-box">Judul1</div>
                <div class="deskripsi">Paragraf</div>
            </div>
            <div class="box">
                <div class="judul-box">Judul1</div>
                <div class="deskripsi">Paragraf</div>
            </div> -->
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="containerr">
            <p>Kelompok 5 ADSI | PTIK D 2021</p>
        </div>
    </footer>
</body>

</html>