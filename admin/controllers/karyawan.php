<?php
    require("models/karyawan.php");
    require("models/jabatan.php");
    $karyawan = new karyawan();
    $jabatan = new jabatan();
    
    /* Tambah */ 
    if (isset($_POST["submit-tambah"])) {
      if (!empty($_POST["nama"])&&!empty($_POST["alamat"])&&!empty($_POST["id_jabatan"])) {
        $n = $_POST["nama"];
        $a = $_POST["alamat"];
        $j = $_POST["id_jabatan"];
        $karyawan->tambah($n,$a,$j);
        $success = "Karyawan berhasil ditambahkan";
        }else {
            $error = "Data Karyawan wajib diisi!";
        }
    }
  
    /* Edit */
    if (isset($_POST["submit-edit"])) {
      if (!empty($_POST["id_karyawan"])&&!empty($_POST["nama"])&&!empty($_POST["alamat"])&&!empty($_POST["id_jabatan"])) {
        $i = $_POST["id_karyawan"];
        $n = $_POST["nama"];
        $a = $_POST["alamat"];
        $j = $_POST["id_jabatan"];
          $karyawan->ubah($i,$n,$a,$j);
          $success = "Data berhasil diedit";
      } 
    }

     /* Edit Foto*/ 
     if (isset($_POST["submit-foto"])) {
      if (!empty($_POST['id_karyawan'])&&!empty($_FILES['foto'])) {
        $i       = $_POST["id_karyawan"];
        $f_tmp   = $_FILES['foto']['tmp_name'];
        $f_name  = $_FILES['foto']['name']; 
        $f_exp   = explode('.',$f_name);
        $f_ext   = end($f_exp);
        $n       = $i.".png";
        $dir     = 'assets/images/karyawan/'.$n;
        if(move_uploaded_file($f_tmp,$dir)){ 
          $karyawan->foto($i,$n);
          $success="Foto berhasil diupload";
        }else{
          $error="Foto gagal diupload";
        }
      }
    }
  
    /* Hapus karyawan*/ 
    if (isset($_POST["submit-hapus"])) {
      if (!empty($_POST["id_karyawan"])) {
        $i = $_POST["id_karyawan"];
        $f = $karyawan->tampil_id($i)["foto"];
        $n = $karyawan->tampil_id($i)["nama"];
        if (!empty($f)) {
          unlink("assets/images/karyawan/$f");
        }
        $karyawan->hapus($i);
        $success = $n." berhasil dihapus";
      }
    } 
    
  
    $data_karyawan = $karyawan->tampil();
    $data_jabatan = $jabatan->tampil();
?>
