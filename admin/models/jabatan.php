<?php
class jabatan{
    private $db;
 
    public function __construct(){
        $this->db = new database();
        $this->db = $this->db->get_koneksi();
    }
 
    public function tambah($jabatan)
    {
        $insert = $this->db->prepare('INSERT INTO jabatan (jabatan) VALUES (?)');
        $insert->bindParam(1, $jabatan);
        $insert->execute();
        return $insert;
    }
 
    public function tampil()
    {
        $show = $this->db->prepare("SELECT * FROM jabatan ORDER BY id_jabatan");
        $show->execute();
        $data = $show->fetchAll();
        return $data;
    }

    public function tampil_id($id_jabatan){
        $show = $this->db->prepare("SELECT * FROM jabatan WHERE id_jabatan = ?");
        $show->bindParam(1, $id_jabatan);
        $show->execute();
        return $show->fetch();
    }

    public function ubah($id_jabatan,$jabatan){
        $update = $this->db->prepare('UPDATE jabatan SET jabatan=? WHERE `id_jabatan`=?');
        $update->bindParam(1, $jabatan);
        $update->bindParam(2, $id_jabatan);
        $update->execute();
        return $update;
    }
 
    public function hapus($id_jabatan)
    {
        $delete = $this->db->prepare("DELETE FROM jabatan WHERE `id_jabatan`=?"); 
        $delete->bindParam(1, $id_jabatan); 
        $delete->execute();
        return $delete;
    }

    public function cek_hapus($id_jabatan){
        $show = $this->db->prepare("SELECT * FROM karyawan WHERE id_jabatan = ?");
        $show->bindParam(1, $id_jabatan);
        $show->execute();
        return $show->fetchAll();
    }
}
?>