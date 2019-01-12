<?php
  session_start();
  if (isset($_SESSION["user"])) {
    header("location:beranda.php");
  }
  include("function.php");
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head><title>LOGIN</title></head>
   <link rel="stylesheet" href="index.css">
   <body>
   <div class="konten">
        <div class="atas">
            <div class="grup">
            </div>
     <?php
        if (isset($_GET["error"])) {
          if ($_GET["error"] == "wrong") {
            echo "<h3>Username dan Password salah !</h3>";
          }
        }

        if (isset($_GET["notif"])) {
          if ($_GET["notif"] == "logout") {
            echo "<h3>Berhasil Logout! </h3>";
          }
        }

        if (isset($_POST['submit'])) {
          echo do_login($_POST['username'], $_POST['password']);
        }
      ?>
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      <div class="grup">
      <input type="text" placeholder="Masukkan Username Anda" name="username">
  </div>

  <div class="grup">
      <input type="password" placeholder="Masukkan Password Anda" name="password">
  </div>

  <div class="jarakatas30">
      <div class="grup tengah">
          <input type="submit" name="submit" value="SIGN IN"></input>
      </div>
  </div>
  <div class="grup">
      <div class="kiri">
          <input type="checkbox">
          <span>Keep me signed in</span>
      </div>
      <div class="kanan">
          <a href="#" class="a garisbawah">Forgot Your Password?</a>
      </div>
  </div>
</form>
</div>
<div class="bawah tengah">
<span class="info">Incorrect login or Password</span>
</div>
</div>
      </form>
   </body>
 </html>
