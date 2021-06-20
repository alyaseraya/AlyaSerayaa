<?php

namespace App;

class Kategori extends Koneksi{

    public function __construct ()
    {  
        parent::__construct();
    }

    public function tampil()
    {
        $sql = "SELECT * FROM tb_kategori";
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
        $i_nama = $_POST['i_nama'];
        $i_keterangan= $_POST['i_keterangan'];
        
        $sql = "INSERT INTO tb_kategori VALUES (NULL, :nama, :keterangan)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama", $i_nama);
        $stmt->bindParam(":keterangan", $i_keterangan); 
        $stmt->execute();
    }

    public function edit($id)
    {
        $sql = "SELECT * FROM tb_kategori WHERE id_kategori=:id_kategori";
        $stmt =  $this->db->prepare($sql);
        $stmt->bindParam(":id_kategori",$id);
        $stmt->execute();

        $row = $stmt->fetch();

    return $row;

    }

    public function update()
    {
        $i_nama = $_POST['i_nama'];
        $i_keterangan = $_POST['i_keterangan'];
        $id = $_POST['id'];

        $sql = "UPDATE tb_kategori SET nama=:nama, keterangan=:keterangan WHERE id_kategori=:id_kategori";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama",$i_nama);
        $stmt->bindParam(":keterangan",$i_keterangan);
        $stmt->bindParam(":id_kategori",$id);
        $stmt->execute();
    }

}