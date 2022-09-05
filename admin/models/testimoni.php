<?php
class testimoni{
    private $db;
 
    public function __construct(){
        $this->db = new database();
        $this->db = $this->db->get_koneksi();
    }
 
    public function tambah($nama,$deskripsi,$id_jabatan)
    {
        $insert = $this->db->prepare('INSERT INTO testimoni (nama,deskripsi,id_jabatan) VALUES (?,?,?)');
        $insert->bindParam(1, $nama);
        $insert->bindParam(2, $deskripsi);
        $insert->bindParam(3, $id_jabatan);
        $insert->execute();
        return $insert;
    }

    public function tampil_id($id_testimoni){
        $show = $this->db->prepare("SELECT * FROM testimoni WHERE id_testimoni = ?");
        $show->bindParam(1, $id_testimoni);
        $show->execute();
        return $show->fetch();
    }
 
    public function tampil()
    {
        $show = $this->db->prepare("SELECT * FROM `testimoni`");
        $show->execute();
        $data = $show->fetchAll();
        return $data;
    }
 
    public function ubah($id_testimoni,$nama,$deskripsi,$id_jabatan){
        $update = $this->db->prepare('UPDATE testimoni SET nama=?, deskripsi=?, id_jabatan=? WHERE `id_testimoni`=?');
        $update->bindParam(1, $nama);
        $update->bindParam(2, $deskripsi);
        $update->bindParam(3, $id_jabatan);
        $update->bindParam(4, $id_testimoni);
        $update->execute();
        return $update;
    }

    public function foto($id_testimoni,$foto){
        $update = $this->db->prepare('UPDATE testimoni SET foto=? WHERE `id_testimoni`=?');
        $update->bindParam(1, $foto);
        $update->bindParam(2, $id_testimoni);
        $update->execute();
        return $update;
    }
 
    public function hapus($id_testimoni)
    {
        $delete = $this->db->prepare("DELETE FROM testimoni WHERE `id_testimoni`=?"); 
        $delete->bindParam(1, $id_testimoni); 
        $delete->execute();
        return $delete;
    }
}
?>
