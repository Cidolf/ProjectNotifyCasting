<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Login Admin</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/navbar.css">
</head>
<style>
  .loginbtn {
    background-color: #74B243;
    color: #E6E6E6;
    box-sizing: border-box;
    margin: auto;
    text-align: center;
    margin-top: 10px;
    height: 40px;
    line-height: 40px;
    width: 350px;
    border-radius: 10px;
    border: 0;
    margin-left: 10px;
  }

  .loginbtn:hover {
    background-color: #D79E31;
    color: #E6E6E6;
    box-sizing: border-box;
    margin: auto;
    text-align: center;
    margin-top: 10px;
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
        <a href="">NotifyCast</a>
      </div>
      <div class="navbar">
        <ul>
          <li><a href="aboutus.html">About Us</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Tutup Navbar -->

  <!-- Konten -->
  <div class="content">
    <!-- Box Login -->
    <div class="box-login">
      <!-- Judul -->
      <div class="judul">
        <h3>Login Admin</h3>
      </div>
      <!-- Tutup judul -->

      <!-- Inputan -->
      <!-- <form id="login_admin" action="validasi.php" method="POST"> -->
      <form id="login_admin" action="validasi_admin.php" method="POST">
        <div class="input">
          <input type="text" name="username" id="username" placeholder="Username" autocomplete="none">
          <br />
          <input type="password" name="password" id="password" placeholder="Password">
        </div>
        <!-- Tutup Inputan -->

        <!-- Tombol -->
        <!-- <div class="tombol"> -->
        <input type="submit" value="Login" name="login" class="loginbtn">
        <!-- </div> -->
      </form>

      <!-- Tutup Tombol -->
      <!-- Konfirmasi -->
      <div class="confirm">
        <center>
          <p>Anda bukan admin? <a href="user.php">Klik Disini</a></p>
        </center>
      </div>
      <!-- Tutup konfirmasi -->
    </div>
    <!-- Tutup Box -->
  </div>
  <!-- Tutup Konten -->


  <!-- Footer -->
  <footer class="footer">
    <div class="containerr">
      <p>Kelompok 5 ADSI | PTIK D 2021</p>
    </div>
  </footer>
  <!-- Tutup Footer -->
  <!-- <script src="js/script.js"></script> -->

</body>

</html>