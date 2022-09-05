<?php
    require("models/pesan.php");
    $pesan = new pesan();
    
    /* Tambah */ 
    if (isset($_POST["submit-tambah"])) {
      if (!empty($_POST["nama"]) && !empty($_POST["email"]) && !empty($_POST["pesan"]) && !empty($_POST["tanggal"])) {
        $n = $_POST["nama"];
        $e = $_POST["email"];
        $p = $_POST["pesan"];
        $t = $_POST["tanggal"];
        $pesan->tambah($n,$e,$p,$t);
        $success = "Pesan berhasil ditambahkan";
        }else {
            $error = "Data Pesan wajib diisi!";
        }
    }
  
    /* Edit */
    if (isset($_POST["submit-edit"])) {
      if (!empty($_POST["id_pesan"]) && !empty($_POST["nama"]) && !empty($_POST["email"]) && !empty($_POST["pesan"]) && !empty($_POST["tanggal"])) {
        $i = $_POST["id_pesan"];
        $n = $_POST["nama"];
        $e = $_POST["email"];
        $p = $_POST["pesan"];
        $t = $_POST["tanggal"];
          $pesan->ubah($i,$n,$e,$p,$t);
          $success = "Data berhasil diedit";
      } 
    }
  
    /* Hapus pesan*/ 
    if (isset($_POST["submit-hapus"])) {
      if (!empty($_POST["id_pesan"])) {
        $i = $_POST["id_pesan"];
        $pesan->hapus($i);
        $success = " Data pesan berhasil dihapus";
      }
    } 
  
    $data_pesan = $pesan->tampil();
?>
