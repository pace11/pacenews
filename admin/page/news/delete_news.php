<!-- code by muh iriansyah putra pratama -->
<?php
include('../lib/koneksi.php');

		$id = $_GET['id'];
// code by muh iriansyah putra pratama
    $query = $conn->prepare("SELECT * FROM tbl_news WHERE id_news =:id");
    $query->bindparam(':id', $id);
    $query->execute();
    $row=$query->fetch(PDO::FETCH_OBJ);

      unlink("../img/news/$row->name_image");
// code by muh iriansyah putra pratama
		try {
			$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$pdo = $conn->prepare("DELETE FROM tbl_news WHERE id_news = :id");
			$deletedata = array(':id' => $id);

			$pdo->execute($deletedata);
// code by muh iriansyah putra pratama
      echo "<center><img src='../img/icons/ceklist.png' width='60'></center>";
			echo "<center><b>berita berhasil dihapus</b></center>";
      echo"<meta http-equiv='refresh' content='1;
      url=?page=news'>";
// code by muh iriansyah putra pratama
		} catch (PDOexception $e) {
			print "hapus berita gagal: " . $e->getMessage() . "<br/>";
		   die();
		}

?>
<!-- code by muh iriansyah putra pratama -->
