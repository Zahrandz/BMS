<?php
    require("models/portfolio.php");
    $portfolio = new portfolio();
    
    /* Tambah */ 
    if (isset($_POST["submit-tambah"])) {
      if (!empty($_POST["nama"])&&!empty($_POST["deskripsi"])&&!empty($_POST["tanggal"])) {
        $n = $_POST["nama"];
        $d = $_POST["deskripsi"];
        $t = $_POST["tanggal"];
        $portfolio->tambah($n,$d,$t);
        $success = "Portfolio berhasil ditambahkan";
        }else {
            $error = "Data Portfolio wajib diisi!";
        }
    }
  
    /* Edit */
    if (isset($_POST["submit-edit"])) {
      if (!empty($_POST["id_portfolio"])&&!empty($_POST["nama"])&&!empty($_POST["deskripsi"])&&!empty($_POST["tanggal"])) {
        $i = $_POST["id_portfolio"];
        $n = $_POST["nama"];
        $d = $_POST["deskripsi"];
        $t = $_POST["tanggal"];
          $portfolio->ubah($i,$n,$d,$t);
          $success = "Data berhasil diedit";
      } 
    }

     /* Edit Foto*/ 
     if (isset($_POST["submit-foto"])) {
      if (!empty($_POST['id_portfolio'])&&!empty($_FILES['foto'])) {
        $i       = $_POST["id_portfolio"];
        $f_tmp   = $_FILES['foto']['tmp_name'];
        $f_name  = $_FILES['foto']['name']; 
        $f_exp   = explode('.',$f_name);
        $f_ext   = end($f_exp);
        $n       = $i.".png";
        $dir     = 'assets/images/portfolio/'.$n;
        if(move_uploaded_file($f_tmp,$dir)){ 
          $portfolio->foto($i,$n);
          $success="Foto berhasil diupload";
        }else{
          $error="Foto gagal diupload";
        }
      }
    }
  
    /* Hapus portfolio*/ 
    if (isset($_POST["submit-hapus"])) {
      if (!empty($_POST["id_portfolio"])) {
        $i = $_POST["id_portfolio"];
        $f = $portfolio->tampil_id($i)["foto"];
        $n = $portfolio->tampil_id($i)["nama"];
        if (!empty($f)) {
          unlink("../assets/images/portfolio/$f");
        }
        $portfolio->hapus($i);
        $success = $n." berhasil dihapus";
      }
    } 
  
    $data_portfolio = $portfolio->tampil();
?>
