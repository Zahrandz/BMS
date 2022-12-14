<?php
class portfolio{
    private $db;
 
    public function __construct(){
        $this->db = new database();
        $this->db = $this->db->get_koneksi();
    }
 
    public function tambah($nama,$deskripsi,$lokasi,$id_wilayah)
    {
        $insert = $this->db->prepare('INSERT INTO portfolio (nama,deskripsi,lokasi,id_wilayah) VALUES (?,?,?,?)');
        $insert->bindParam(1, $nama);
        $insert->bindParam(2, $deskripsi);
        $insert->bindParam(3, $lokasi);
        $insert->bindParam(4, $id_wilayah);
        $insert->execute();
        return $insert;
    }

    public function tampil_id($id_portfolio){
        $show = $this->db->prepare("SELECT * FROM portfolio WHERE id_portfolio = ?");
        $show->bindParam(1, $id_portfolio);
        $show->execute();
        return $show->fetch();
    }
 
    public function tampil()
    {
        $show = $this->db->prepare("SELECT * FROM `portfolio`");
        $show->execute();
        $data = $show->fetchAll();
        return $data;
    }
 
    public function ubah($id_portfolio,$nama,$deskripsi,$lokasi,$id_wilayah){
        $update = $this->db->prepare('UPDATE portfolio SET nama=?, deskripsi=?, lokasi=?, id_wilayah=? WHERE `id_portfolio`=?');
        $update->bindParam(1, $nama);
        $update->bindParam(2, $deskripsi);
        $update->bindParam(3, $lokasi);
        $update->bindParam(4, $id_wilayah);
        $update->bindParam(5, $id_portfolio);
        $update->execute();
        return $update;
    }

    public function foto($id_portfolio,$foto){
        $update = $this->db->prepare('UPDATE portfolio SET foto=? WHERE `id_portfolio`=?');
        $update->bindParam(1, $foto);
        $update->bindParam(2, $id_portfolio);
        $update->execute();
        return $update;
    }
 
    public function hapus($id_portfolio)
    {
        $delete = $this->db->prepare("DELETE FROM portfolio WHERE `id_portfolio`=?"); 
        $delete->bindParam(1, $id_portfolio); 
        $delete->execute();
        return $delete;
    }
}
?>
