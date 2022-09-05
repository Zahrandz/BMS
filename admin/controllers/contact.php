<?php
    require("models/contact.php");
    // require("models/kota.php");
    $contact = new contact();
    // $kota = new kota();
    
    /* Tambah */ 
    if (isset($_POST["submit-tambah"])) {
      if (!empty($_POST["alamat"]) && !empty($_POST["email"]) && !empty($_POST["phone"])) {
        $a = $_POST["alamat"];
        $e = $_POST["email"];
        $p = $_POST["phone"];
        $contact->tambah($a,$e,$p);
        $success = "Contact berhasil ditambahkan";
        }else {
            $error = "Data Contact wajib diisi!";
        }
    }
  
    /* Edit */
    if (isset($_POST["submit-edit"])) {
      if (!empty($_POST["id_contact"]) && !empty($_POST["alamat"]) && !empty($_POST["email"]) && !empty($_POST["phone"])) {
        $i = $_POST["id_contact"];
        $a = $_POST["alamat"];
        $e = $_POST["email"];
        $p = $_POST["phone"];
          $contact->ubah($i,$a,$e,$p);
          $success = "Data berhasil diedit";
      } 
    }
  
    /* Hapus contact*/ 
    if (isset($_POST["submit-hapus"])) {
      if (!empty($_POST["id_contact"])) {
        $i = $_POST["id_contact"];
        $contact->hapus($i);
        $success = " Data contact berhasil dihapus";
      }
    } 
  
    $data_contact = $contact->tampil();
    // $data_kota = $kota->tampil();
?>
