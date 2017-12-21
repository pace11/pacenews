<html>
<head>
	<title>
	PACE | News
	</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<div id="header">
		<h1>RYAN PACE | News</h1>
	</div>
	<div id="menu">
		<div class="menu-kiri">
			<a class="link" href="?page=home">Beranda</a>
			<a class="link" href="?page=contact">Kontak</a>
		</div>

		<div class="menu-kanan">
			<a class="tombol-biru" href="admin/login.php" target="_blank">Masuk</a>
		</div>

	</div>
	<div id="article">
		<div class="kiri">
			<?php

			include("content.php");

			 ?>
		</div>

		<div class="kanan">
			<?php

			include("page/fav_news.php");

			 ?>
		</div>

	</div>
	<div id="footer">
		<p>copyright &copy pace 2017</p>
	</div>

</body>

</html>
