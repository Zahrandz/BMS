<?php
    require("admin/models/about.php");
    require("admin/models/contact.php");
    $about = new about();
    $contact = new contact();
  
    $data_about = $about->tampil();
?>