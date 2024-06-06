<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Pengumuman</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/pengumuman.css">
</head>
<style>
    .pengumumanbtn {
        background-color: #74B243;
        color: #E6E6E6;
        box-sizing: border-box;
        margin: auto;
        text-align: center;
        margin-top: 20px;
        height: 40px;
        line-height: 40px;
        width: 350px;
        border-radius: 10px;
        border: 0;
        margin-left: 10px;
    }

    .pengumumanbtn:hover {
        background-color: #D79E31;
        color: #E6E6E6;
        box-sizing: border-box;
        margin: auto;
        text-align: center;
        margin-top: 20px;
        height: 40px;
        line-height: 40px;
        width: 350px;
        border-radius: 10px;
        border: 0;
        margin-left: 10px;
    }
</style>

<body>
    <!-- Navbar -->
    <nav class="nav">
        <div class="containerr">
            <div class="logo">
                <a href="dashboard_admin.php">NotifyCast</a>
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

    <div class="kontent-pengumuman">
        <div class="box-pengumuman">
            <div class="judul-pengumuman">
                <h3>Pembuatan Pengumuman</h3>
            </div>
            <div class="latar">
                <form action="" method="post" id="pengumuman">
                    <div class="isi-pengumuman">
                        <input type="text" name="judul" id="judul" placeholder="Judul Pengumuman">
                        <textarea name="isi-pesan" id="isi-pesan" cols="30" rows="10">Isi Pengumuman</textarea>
                    </div>

            </div>
            <!-- <div class="tombol-pengumuman" onclick="kirimdata()" name="kirim">
                Kirim Pesan
            </div> -->
            <input type="submit" value="Kirim" name="kirim" class="pengumumanbtn">
            </form>
            <?php
            if (isset($_POST['kirim'])) {
                $judul = $_POST['judul'];
                $isi = $_POST['isi-pesan'];

                // include database connection file
                include "koneksi.php";

                // Insert user data into table
                $data = "INSERT INTO pengumuman (judul, isi_pengumuman) VALUES('$judul','$isi')";
                $kirim = mysqli_query($conn, $data);

                // Show message when user added
            
            }
            ?>

        </div>
    </div>

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