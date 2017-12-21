<!DOCTYPE html>
<html>
<head>
 <title>Login</title>
 <link rel="stylesheet" type="text/css" href="css/loginstyle.css">
 <link rel="stylesheet" type="text/css" href="style.css">
<!-- code by muh iriansyah putra pratama -->
</head>
<body>
<div class="login">
    <h2 class="login-header">Login | Administrator</h2>
        <form class="login-container" action="login.php" method="post">
            <p>
                <input type="text" name="username" placeholder="Username" required>
            </p>
            <p>
                <input type="password" name="password" placeholder="Password" required>
            </p>
            <p>
                <input type="submit" name="submit" value="Masuk">
            </p>
            <p align="center"><a href="../index.php">kembali</a></p>
<!-- code by muh iriansyah putra pratama -->
            <?php

              include "../lib/koneksi.php";
              session_start();
// code by muh iriansyah putra pratama
              if (isset($_POST['submit'])){
                $user = $_POST['username'];
                $pwd = $_POST['password'];
// code by muh iriansyah putra pratama
                $pdo = $conn->prepare("SELECT * FROM tbl_admin WHERE username=:a AND password=:b");
                $pdo->execute(array(':a' => $user, ':b' => $pwd));
                $count = $pdo->rowcount();
// code by muh iriansyah putra pratama
                if ($count==0){
                  echo "<center><a class='tombol-merah'>Login Gagal</a></center>";
                }else {
// code by muh iriansyah putra pratama
                  $_SESSION['username'] = $user;
                  $_SESSION['password'] = $pwd;
                  echo"<center><a class='tombol-biru'>Login Berhasil</a></center>";
                  echo"<meta http-equiv='refresh' content='1;
                  url=index.php'>";
                }
              }
// code by muh iriansyah putra pratama
             ?>

        </form>

</div>
</body>
</html>
<!-- code by muh iriansyah putra pratama -->
