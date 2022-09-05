<?php
class contact{
    private $db;
 
    public function __construct(){
        $this->db = new database();
        $this->db = $this->db->get_koneksi();
    }
 
    public function tambah($alamat,$email,$phone)
    {
        $insert = $this->db->prepare('INSERT INTO `contact` (`alamat`,`email`,`phone`) VALUES (?,?,?)');
        $insert->bindParam(1, $alamat);
        $insert->bindParam(2, $email);
        $insert->bindParam(3, $phone);
        $insert->execute();
        return $insert;
    }
 
    public function tampil()
    {
        $show = $this->db->prepare("SELECT * FROM `contact`");
        $show->execute();
        $data = $show->fetchAll();
        return $data;
    }
 
    public function ubah($id_contact,$alamat,$email,$phone){
        $update = $this->db->prepare('UPDATE `contact` SET `alamat`=?, `email`=?, `phone`=? WHERE `id_contact`=?');
        $update->bindParam(1, $alamat);
        $update->bindParam(2, $email);
        $update->bindParam(3, $phone);
        $update->bindParam(4, $id_contact);
        $update->execute();
        return $update;
    }

    public function hapus($id_contact)
    {
        $delete = $this->db->prepare("DELETE FROM contact WHERE `id_contact`=?"); 
        $delete->bindParam(1, $id_contact); 
        $delete->execute();
        return $delete;
    }
}
?>
