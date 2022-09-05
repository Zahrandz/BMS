<?php
    require("models/wilayah.php");
    $wilayah = new wilayah();
    
    /* Tambah Data */
    if (isset($_POST["submit-tambah"])) {
        if (!empty($_POST["wilayah"])) {
        $dataWilayah = $_POST["wilayah"];
        $wilayah->tambah($dataWilayah);
        $success = "Wilayah berhasil ditambahkan";
        }else {$error = "Data Wilayah wajib diisi!";}
    }

    /* Edit Data */
    if (isset($_POST["submit-edit"])) {
        if (!empty($_POST["id_wilayah"])&&!empty($_POST["wilayah"])) {
        $idWilayah = $_POST["id_wilayah"];
        $dataWilayah = $_POST["wilayah"];
        $wilayah->edit($dataWilayah, $idWilayah);
        $success = "Data berhasil diedit";
        }
    }

    /* Hapus Data*/
    if (isset($_POST["submit-hapus"])) {
        if (!empty($_POST["id_wilayah"])) {
            $idWilayah = $_POST["id_wilayah"];
            $cek = $wilayah->cek_hapus($idWilayah);
            if (!$cek) {
                $wilayah->hapus($idWilayah);
                $success = "Data Wilayah berhasil dihapus";
            } else { $error = "Wilayah sedang digunakan oleh ".count($cek)." store"; }
        }
    }
    
    /* Tampil Data */
    $dataWilayah = $wilayah->tampil();
?>
