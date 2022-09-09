<?php
  require("admin/models/contact.php");
	require("admin/models/portfolio.php");
  $contact = new contact();
  $portfolio = new portfolio();

  if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $porto = $portfolio->tampil_id($id);
  }else{
  	header("Location:home");
  }
?>