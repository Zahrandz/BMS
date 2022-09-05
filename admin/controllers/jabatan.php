<?php
	require("models/jabatan.php");
  $jabatan = new jabatan();
  
  /* Tambah */ 
  if (isset($_POST["submit-tambah"])) {
    if (!empty($_POST["jabatan"])) {
        $j = $_POST["jabatan"];
          $jabatan->tambah($j);
          $success = "Jabatan berhasil ditambahkan";
      }else {$error = "Data Jabatan wajib diisi!";}
  }

  /* Edit */
  if (isset($_POST["submit-edit"])) {
    if (!empty($_POST["id_jabatan"])&&!empty($_POST["jabatan"])) {
      $i = $_POST["id_jabatan"];
      $j = $_POST["jabatan"];
        $jabatan->ubah($i,$j);
        $success = "Data berhasil diedit";
    } 
  }

  /* Hapus jabatan*/ 
  if (isset($_POST["submit-hapus"])) {
    if (!empty($_POST["id_jabatan"])) {
      $i = $_POST["id_jabatan"];
      $cek = $jabatan->cek_hapus($i);
      if (!$cek) {
        $jabatan->hapus($i);
        $success = " Data Jabatan berhasil dihapus";
      } else {$error = "Jabatan sedang digunakan oleh ".count($cek)." menu";}
    }
  } 

  $data_jabatan = $jabatan->tampil();
?>
