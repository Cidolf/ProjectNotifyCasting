<?php
session_start();
if ($_SESSION['user'] == '') {
    header('location: index.php');
}
include "koneksi.php";
$query = mysqli_query($conn, "SELECT * FROM pengumuman ORDER BY id_pengumuman DESC LIMIT 4");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<style>
    .profil {
        float: left;
        height: 550px;
        width: 25%;
        background-color: #4D68AE;
    }

    .kontent {
        float: right;
        height: 550px;
        width: 75%;
        background-color: #E6E6E6;
    }

    .foto {
        margin: 25px;
        text-align: center;

    }

    .foto img {
        width: 150px;
        border-radius: 70px;
    }

    .nama {
        height: 40px;
        width: 200px;
        line-height: 40px;
        background-color: #74B243;
        box-sizing: border-box;
        border-radius: 10px;
        color: #E6E6E6;
        text-align: center;
        margin: 10px auto;
    }

    .logout:hover {
        height: 40px;
        width: 200px;
        line-height: 40px;
        background-color: #D79E31;
        box-sizing: border-box;
        border-radius: 10px;
        color: #E6E6E6;
        text-align: center;
        margin: 10px auto;
    }

    .nama a {
        text-decoration: none;
        color: #E6E6E6;
    }

    .kontent-dashboard {
        width: 75%;
        box-sizing: border-box;
        height: 550px;
        float: right;
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        flex-direction: row;
        padding: 15px;
    }

    .isi-kontent {

        width: 45%;
        height: 250px;
    }

    .lampir img {
        width: 250px;
    }
</style>

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
                    <li><a href="chatAdmin.html">Chat</a></li>
                    <li><a href="tampil_kritik.php">Kritik dan Saran</a></li>
                    <li><a href="aboutus.html">About Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Tutup Navbar -->

    <!-- Konten -->
    <div class="isi-dashboard">
        <div class="profil">
            <div class="foto">
                <img src="img/profil.jpg" alt="foto">
            </div>
            <div class="identity">
                <div class="nama">
                    <?php echo $_SESSION['user']; ?>
                </div>
                <div class="nama logout" onclick="logout()"><a href="">Log Out</a></div>
            </div>
        </div>
        <div class="kontent-dashboard">
            <?php
            $no = 1;
            while ($isi = mysqli_fetch_array($query)) {
                ?>
                <div class="isi-kontent">
                    <div class="lampir">
                        <img src="img/bg-gray.jpg" alt="gambar">
                    </div>
                    <div class="desc">
                        <h3>
                            <?php echo $isi['judul'] ?>
                        </h3>
                        <p>
                            <?php echo $isi['isi_pengumuman']; ?>
                        </p>
                    </div>
                </div>
                <?php $no++;
                $isi = mysqli_fetch_array($query) ?>
                <div class="isi-kontent">
                    <div class="lampir">
                        <img src="img/bg-gray.jpg" alt="gambar">
                    </div>
                    <div class="desc">
                        <h3>
                            <?php echo $isi['judul'] ?>
                        </h3>
                        <p>
                            <?php echo $isi['isi_pengumuman']; ?>
                        </p>
                    </div>
                </div>
                <?php $no++;
            } ?>
            <!-- <div class="isi-kontent">
                <div class="lampir">
                    <img src="img/bg-gray.jpg" alt="gambar">
                </div>
                <div class="desc">
                    <h3>Judul</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo sit vero adipisci quo maxime
                        tempora rerum? Nemo aperiam quam officiis.</p>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Tutup Konten -->

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