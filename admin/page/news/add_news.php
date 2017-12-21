<h1>Berita Tambah</h1>
<form name="add" method="post" action="?page=add_newspro" enctype="multipart/form-data">
<!-- code by muh iriansyah putra pratama -->
  <table class="article">
    <tr>
      <td>Judul Berita</td>
      <td>
        <input type="text" name="title" size="50" required>
      </td>
    </tr>
<!-- code by muh iriansyah putra pratama -->
    <tr>
      <td>Gambar</td>
      <td>
        <input type="file" name="image" required>
      </td>
    </tr>
<!-- code by muh iriansyah putra pratama -->
    <tr>
      <td>Isi Berita</td>
      <td>
        <textarea name="content" rows="8" cols="80" required></textarea>
      </td>
    </tr>
<!-- code by muh iriansyah putra pratama -->
    <tr>
      <td></td>
      <td>
        <input class="tombol-biru" type="submit" name="add" value="Tambah & Simpan">
        <a class="tombol-merah" href="?page=news">Tutup</a>
      </td>
    </tr>
  </table>
<!-- code by muh iriansyah putra pratama -->
</form>
<!-- code by muh iriansyah putra pratama -->
