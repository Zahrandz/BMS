<?php
class pasar{
    private $db;
 
    public function __construct(){
        $this->db = new database();
        $this->db = $this->db->get_koneksi();
    }
 
    public function tambah($nama,$alamat,$id_wilayah,$lokasi)
    {
        $insert = $this->db->prepare('INSERT INTO `pasar` (`nama`,`alamat`,`id_wilayah`,`lokasi`) VALUES (?,?,?,?)');
        $insert->bindParam(1, $nama);
        $insert->bindParam(2, $alamat);
        $insert->bindParam(3, $id_wilayah);
        $insert->bindParam(4, $lokasi);
        $insert->execute();
        return $insert;
    }
 
    public function tampil()
    {
        $show = $this->db->prepare("SELECT * FROM `pasar`");
        $show->execute();
        $data = $show->fetchAll();
        return $data;
    }
 
    public function ubah($id_pasar,$nama,$alamat,$id_wilayah,$lokasi){
        $update = $this->db->prepare('UPDATE `pasar` SET `nama`=?, `alamat`=?, `id_wilayah`=?, `lokasi`=? WHERE `id_pasar`=?');
        $update->bindParam(1, $nama);
        $update->bindParam(2, $alamat);
        $update->bindParam(3, $id_wilayah);
        $update->bindParam(4, $lokasi);
        $update->bindParam(5, $id);
        $update->execute();
        return $update;
    }

    public function hapus($id_pasar)
    {
        $delete = $this->db->prepare("DELETE FROM pasar WHERE `id_pasar`=?"); 
        $delete->bindParam(1, $id_pasar); 
        $delete->execute();
        return $delete;
    }
}
?>
