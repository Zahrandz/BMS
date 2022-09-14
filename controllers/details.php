<?php
  require("admin/models/contact.php");
	require("admin/models/portfolio.php");
  require("admin/models/wilayah.php");
  $contact = new contact();
  $portfolio = new portfolio();
  $wilayah = new wilayah();

  if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $porto = $portfolio->tampil_id($id);
  }else{
  	header("Location:home");
  }
?>