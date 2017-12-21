<?php
// code by muh iriansyah putra pratama
    include 'lib/koneksi.php';
// code by muh iriansyah putra pratama
    $idnews = $_POST['id'];
    $date = date('Ymd');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comm = $_POST['commentar'];
// code by muh iriansyah putra pratama
    try {
      $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $pdo = $conn->prepare('INSERT INTO tbl_comment (id_news, name, email, commentar, date_in)
                  values (:id_news, :name, :email, :commentar, :date_in)');
      $insertdata = array(':id_news' => $idnews, ':name' => $name, 'email' => $email, 'commentar' => $comm, ':date_in' => $date);

      $pdo->execute($insertdata);
// code by muh iriansyah putra pratama
      echo"<meta http-equiv='refresh' content='0;
      url=?page=home_detail&id=$idnews'>";

    } catch (PDOexception $e) {
      print "Added data failed: " . $e->getMessage() . "<br/>";
       die();
    }
// code by muh iriansyah putra pratama
 ?>
