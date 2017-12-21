<?php

  if (isset($_GET['page'])) $page=$_GET['page'];
  else $page="home";
// code by muh iriansyah putra pratama
  if ($page == "home") include("page/home.php");

  elseif ($page == "home_detail") include("page/home_detail.php");
  elseif ($page == "contact") include("page/contact.php");
  elseif ($page == "contact_pro") include("page/contact_pro.php");
  elseif ($page == "comm_pro") include("page/comm_pro.php");

// code by muh iriansyah putra pratama
else echo"Konten tidak ada";

?>
