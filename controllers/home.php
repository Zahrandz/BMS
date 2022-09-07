<?php
    require("admin/models/about.php");
    require("admin/models/contact.php");
    require("admin/models/jabatan.php");
    require("admin/models/karyawan.php");
    require("admin/models/pesan.php");
    $about = new about();
    $contact = new contact();
    $jabatan = new jabatan();
    $karyawan = new karyawan();
    $pesan = new pesan();
    
    /* Tambah */ 
    if (isset($_POST["submit-tambah"])) {
      if (!empty($_POST["nama"]) && !empty($_POST["email"]) && !empty($_POST["pesan"])) {
        $n = $_POST["nama"];
        $e = $_POST["email"];
        $p = $_POST["pesan"];
        $t = date("Y-m-d H:i:s");
        $pesan->tambah($n,$e,$p,$t);
        $success = "Pesan berhasil ditambahkan";
        }else {
            $error = "Data Pesan wajib diisi!";
        }
    }
?>
