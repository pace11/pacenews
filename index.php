<!-- code by muh iriansyah putra pratama -->
<html>
<head>
	<title>
	PACE | News
	</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<!-- code by muh iriansyah putra pratama -->
	<div id="header">
		<h1>RYAN PACE | News</h1>
	</div>
	<div id="menu">
		<div class="menu-kiri">
			<a class="link" href="?page=home">Beranda</a>
			<a class="link" href="?page=contact">Kontak</a>
		</div>
<!-- code by muh iriansyah putra pratama -->
		<div class="menu-kanan">
			<a class="tombol-biru" href="admin/login.php" target="_blank">Masuk</a>
		</div>
<!-- code by muh iriansyah putra pratama -->
	</div>
	<div id="article">
		<div class="kiri">
			<?php

			include("content.php");

			 ?>
		</div>
<!-- code by muh iriansyah putra pratama -->
		<div class="kanan">
			<?php

			include("page/fav_news.php");

			 ?>
		</div>
<!-- code by muh iriansyah putra pratama -->
	</div>
	<div id="footer">
		<p>copyright &copy pace 2017</p>
	</div>

</body>

</html>
