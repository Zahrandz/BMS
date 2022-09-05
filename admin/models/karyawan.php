<?php
class karyawan{
    private $db;
 
    public function __construct(){
        $this->db = new database();
        $this->db = $this->db->get_koneksi();
    }
 
    public function tambah($nama,$alamat,$id_jabatan)
    {
        $insert = $this->db->prepare('INSERT INTO karyawan (nama,alamat,id_jabatan) VALUES (?,?,?)');
        $insert->bindParam(1, $nama);
        $insert->bindParam(2, $alamat);
        $insert->bindParam(3, $id_jabatan);
        $insert->execute();
        return $insert;
    }

    public function tampil_id($id_karyawan){
        $show = $this->db->prepare("SELECT * FROM karyawan WHERE id_karyawan = ?");
        $show->bindParam(1, $id_karyawan);
        $show->execute();
        return $show->fetch();
    }
 
    public function tampil()
    {
        $show = $this->db->prepare("SELECT * FROM `karyawan`");
        $show->execute();
        $data = $show->fetchAll();
        return $data;
    }
 
    public function ubah($id_karyawan,$nama,$alamat,$id_jabatan){
        $update = $this->db->prepare('UPDATE karyawan SET nama=?, alamat=?, id_jabatan=? WHERE `id_karyawan`=?');
        $update->bindParam(1, $nama);
        $update->bindParam(2, $alamat);
        $update->bindParam(3, $id_jabatan);
        $update->bindParam(4, $id_karyawan);
        $update->execute();
        return $update;
    }

    public function foto($id_karyawan,$foto){
        $update = $this->db->prepare('UPDATE karyawan SET foto=? WHERE `id_karyawan`=?');
        $update->bindParam(1, $foto);
        $update->bindParam(2, $id_karyawan);
        $update->execute();
        return $update;
    }
 
    public function hapus($id_karyawan)
    {
        $delete = $this->db->prepare("DELETE FROM karyawan WHERE `id_karyawan`=?"); 
        $delete->bindParam(1, $id_karyawan); 
        $delete->execute();
        return $delete;
    }
}
?>
