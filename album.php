<?php

namespace App;

class Album extends Koneksi{

    public function __construct ()
    {  
        parent::__construct();
    }

    public function tampil()
    {
        $sql = "SELECT tb_album.*, tb_photo.* FROM tb_album, tb_photo WHERE tb_album.photo_id=tb_photo.id_photo";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];
        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }
    
    return $data; 
    }

    public function input()
    {

        $i_nama =$_POST['i_nama'];
        $i_keterangan =$_POST['i_keterangan'];
        $i_id_poto =$_POST['i_id_poto'];

        $sql = "INSERT INTO tb_album VALUES (NULL, :nama, :keterangan, :photo_id)";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":nama", $i_nama);
        $stmt->bindParam(":keterangan", $i_keterangan);
        $stmt->bindParam(":photo_id", $i_id_poto);
        $stmt->execute();
    }

    public function edit($id)
    {
        $sql = "SELECT * FROM tb_album WHERE id_album=:id_album";
        $stmt =  $this->db->prepare($sql);
        $stmt->bindParam(":id_album",$id);
        $stmt->execute();

        $row = $stmt->fetch();

    return $row;

    }

    public function update()
    {

        $i_nama =$_POST['i_nama'];
        $i_keterangan =$_POST['i_keterangan'];
        $i_id_poto =$_POST['i_id_poto'];
        $id = $_POST['id'];

        $sql = "UPDATE tb_album SET nama=:nama, keterangan=:keterangan, photo_id=:photo_id WHERE id_album=:id_album";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama", $i_nama);
        $stmt->bindParam(":keterangan", $i_keterangan);
        $stmt->bindParam(":photo_id", $i_id_poto);
        $stmt->bindParam(":id_album",$id);
        $stmt->execute();
    }

}