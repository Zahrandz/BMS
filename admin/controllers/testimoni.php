<?php
    require("models/testimoni.php");
    require("models/jabatan.php");
    $testimoni = new testimoni();
    $jabatan = new jabatan();
    
    /* Tambah */ 
    if (isset($_POST["submit-tambah"])) {
      if (!empty($_POST["nama"])&&!empty($_POST["deskripsi"])&&!empty($_POST["id_jabatan"])) {
        $n = $_POST["nama"];
        $d = $_POST["deskripsi"];
        $j = $_POST["id_jabatan"];
        $testimoni->tambah($n,$d,$j);
        $success = "Testimoni berhasil ditambahkan";
        }else {
            $error = "Data Testimoni wajib diisi!";
        }
    }
  
    /* Edit */
    if (isset($_POST["submit-edit"])) {
      if (!empty($_POST["id_testimoni"])&&!empty($_POST["nama"])&&!empty($_POST["deskripsi"])&&!empty($_POST["id_jabatan"])) {
        $i = $_POST["id_testimoni"];
        $n = $_POST["nama"];
        $d = $_POST["deskripsi"];
        $j = $_POST["id_jabatan"];
          $testimoni->ubah($i,$n,$d,$j);
          $success = "Data berhasil diedit";
      } 
    }

     /* Edit Foto*/ 
     if (isset($_POST["submit-foto"])) {
      if (!empty($_POST['id_testimoni'])&&!empty($_FILES['foto'])) {
        $i       = $_POST["id_testimoni"];
        $f_tmp   = $_FILES['foto']['tmp_name'];
        $f_name  = $_FILES['foto']['name']; 
        $f_exp   = explode('.',$f_name);
        $f_ext   = end($f_exp);
        $n       = $i.".png";
        $dir     = 'assets/images/testimoni/'.$n;
        if(move_uploaded_file($f_tmp,$dir)){ 
          $testimoni->foto($i,$n);
          $success="Foto berhasil diupload";
        }else{
          $error="Foto gagal diupload";
        }
      }
    }
  
    /* Hapus testimoni*/ 
    if (isset($_POST["submit-hapus"])) {
      if (!empty($_POST["id_testimoni"])) {
        $i = $_POST["id_testimoni"];
        $f = $testimoni->tampil_id($i)["foto"];
        $n = $testimoni->tampil_id($i)["nama"];
        if (!empty($f)) {
          unlink("assets/images/testimoni/$f");
        }
        $testimoni->hapus($i);
        $success = $n." berhasil dihapus";
      }
    } 
  
    $data_testimoni = $testimoni->tampil();
    $data_jabatan = $jabatan->tampil();
?>
