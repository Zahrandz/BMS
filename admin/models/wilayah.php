<?php

    class wilayah {
        private $db;
 
    public function __construct(){
        $this->db = new database();
        $this->db = $this->db->get_koneksi();
    }

    public function tampil(){
        $data = $this->db->prepare('SELECT * FROM `wilayah` ORDER BY `id_wilayah`');
        $data->execute();
        $show = $data->fetchAll();
        return $show;
    }

    public function tampil_id($id_wilayah){
        $show = $this->db->prepare("SELECT * FROM wilayah WHERE id_wilayah = ?");
        $show->bindParam(1, $id_wilayah);
        $show->execute();
        return $show->fetch();
    }

    public function tambah($wilayah){
        $insert = $this->db->prepare('INSERT INTO `wilayah` (`wilayah`) VALUES (?)');
        $insert->bindParam(1, $wilayah);
        $insert->execute();
        return $insert;
    }

    public function edit($wilayah, $id){
        $update = $this->db->prepare('UPDATE `wilayah` set `wilayah`=? where `id_wilayah` = ?');
        $update->bindParam(1, $wilayah);
        $update->bindParam(2, $id);
        $update->execute();
        return $update;
    }

    public function hapus($id){
        $delete = $this->db->prepare('DELETE FROM `wilayah` where `id_wilayah` = ?');
        $delete->bindParam(1, $id);
        $delete->execute();
        return $delete;
    }

    public function cek_hapus($id_wilayah){
        $show = $this->db->prepare("SELECT * FROM pasar WHERE id_wilayah= ?");
        $show->bindParam(1, $id_wilayah);
        $show->execute();
        return $show->fetchAll();
    }

    }
