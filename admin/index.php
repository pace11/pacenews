<?php
    session_start();
// code by muh iriansyah putra pratama
    if (!empty($_SESSION['username']) AND !empty($_SESSION['password']))
    {
      include("../lib/koneksi.php");
?>

<!-- code by muh iriansyah putra pratama -->
<html>
<head>
	<title>
	PACE | News
	</title>
	<link rel="stylesheet" href="style.css" type="text/css"></link>
</head>
<body>
<!-- code by muh iriansyah putra pratama -->
	<div id="header">
		<h1>ADMINISTRATOR</h1>
	</div>
	<div id="menu">
<!-- code by muh iriansyah putra pratama -->
		<div class="menu-kiri">
			<a href="?page=dashboard" class="link">Beranda</a>
      <a href="?page=news" class="link">Berita</a>
      <a href="?page=message" class="link">Pesan & Komentar</a>
		</div>

		<div class="menu-kanan">
			<?php

			if (isset($_SESSION['username'])){
				$user = $_SESSION['username'];
				echo "<a class='tombol-biru'>Hay, <b>$user</b></a>";
			}

			 ?>
			<a class="tombol-merah" href="logout.php">Keluar</a>
		</div>
<!-- code by muh iriansyah putra pratama -->
	</div>
	<div id="article">

    <?php
    include("content.php");
     ?>

	</div>
	<div id="footer">
		<p>copyright by pace 2017</p>
	</div>
<!-- code by muh iriansyah putra pratama -->
</body>
</html>

<?php
}
else { ?>
  <center><button type="button" class="tombol-merah">Login First</button></center>
<?php echo"<meta http-equiv='refresh' content='1;
url=login.php'>";
} ?>
<!-- code by muh iriansyah putra pratama -->
