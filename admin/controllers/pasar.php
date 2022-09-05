<?php
    require("models/pasar.php");
    require("models/wilayah.php");
    $pasar = new pasar();
    $wilayah = new wilayah();
    
    /* Tambah */ 
    if (isset($_POST["submit-tambah"])) {
      if (!empty($_POST["nama"]) && !empty($_POST["alamat"]) && !empty($_POST["id_wilayah"]) && !empty($_POST["lokasi"])) {
        $n = $_POST["nama"];
        $a = $_POST["alamat"];
        $w = $_POST["id_wilayah"];
        $l = $_POST["lokasi"];
        $pasar->tambah($n,$a,$w,$l);
        $success = "Pasar berhasil ditambahkan";
        }else {
            $error = "Data Pasar wajib diisi!";
        }
    }
  
    /* Edit */
    if (isset($_POST["submit-edit"])) {
      if (!empty($_POST["id_pasar"]) && !empty($_POST["nama"]) && !empty($_POST["alamat"]) && !empty($_POST["id_wilayah"]) && !empty($_POST["lokasi"])) {
        $i = $_POST["id_pasar"];
        $n = $_POST["nama"];
        $a = $_POST["alamat"];
        $w = $_POST["id_wilayah"];
        $l = $_POST["lokasi"];
          $pasar->ubah($i,$n,$a,$w,$l);
          $success = "Data berhasil diedit";
      } 
    }
  
    /* Hapus Pasar*/ 
    if (isset($_POST["submit-hapus"])) {
      if (!empty($_POST["id_pasar"])) {
        $i = $_POST["id_pasar"];
        $pasar->hapus($i);
        $success = " Data Pasar berhasil dihapus";
      }
    } 
  
    $data_pasar = $pasar->tampil();
    $data_wilayah = $wilayah->tampil();
?>
