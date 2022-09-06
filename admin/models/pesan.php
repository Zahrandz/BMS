<?php
class pesan{
    private $db;
 
    public function __construct(){
        $this->db = new database();
        $this->db = $this->db->get_koneksi();
    }
 
    public function tambah($nama,$email,$pesan,$tanggal)
    {
        $insert = $this->db->prepare('INSERT INTO `pesan` (`nama`,`email`,`pesan`,`tanggal`) VALUES (?,?,?,?)');
        $insert->bindParam(1, $nama);
        $insert->bindParam(2, $email);
        $insert->bindParam(3, $pesan);
        $insert->bindParam(4, $tanggal);
        $insert->execute();
        return $insert;
    }
 
    public function tampil()
    {
        $show = $this->db->prepare("SELECT * FROM `pesan`");
        $show->execute();
        $data = $show->fetchAll();
        return $data;
    }
 
    public function ubah($id_pesan,$nama,$email,$pesan,$tanggal){
        $update = $this->db->prepare('UPDATE `pesan` SET `nama`=?, `email`=?, `pesan`=?, `tanggal`=? WHERE `id_pesan`=?');
        $update->bindParam(1, $nama);
        $update->bindParam(2, $email);
        $update->bindParam(3, $pesan);
        $update->bindParam(4, $tanggal);
        $update->bindParam(5, $id_pesan);
        $update->execute();
        return $update;
    }

    public function hapus($id_pesan)
    {
        $delete = $this->db->prepare("DELETE FROM pesan WHERE `id_pesan`=?"); 
        $delete->bindParam(1, $id_pesan); 
        $delete->execute();
        return $delete;
    }
}
?>
