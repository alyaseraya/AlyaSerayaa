<?php

namespace App;

class Post extends Koneksi{

    public function __construct ()
    {  
        parent::__construct();
    }

    public function tampil()
    {
        $sql = "SELECT tb_post.*, tb_kategori.* FROM tb_post, tb_kategori WHERE tb_post.id_cat=tb_kategori.id_kategori";
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

        $i_tanggal =$_POST['i_tanggal'];
        $i_slug =$_POST['i_slug'];
        $i_title =$_POST['i_title'];
        $i_keterangan =$_POST['i_keterangan'];
        $i_id_categori =$_POST['i_id_categori'];

        $sql = "INSERT INTO tb_post VALUES (NULL, :tangggal, :slug, :title, :keterangan, :id_cat)";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":tangggal", $i_tanggal);
        $stmt->bindParam(":slug", $i_slug);
        $stmt->bindParam(":title", $i_title);
        $stmt->bindParam(":keterangan", $i_keterangan);
        $stmt->bindParam(":id_cat", $i_id_categori);
        $stmt->execute();
    }

    public function edit($id)
    {
        $sql = "SELECT * FROM tb_post WHERE id_post=:id_post";
        $stmt =  $this->db->prepare($sql);
        $stmt->bindParam(":id_post",$id);
        $stmt->execute();

        $row = $stmt->fetch();

    return $row;

    }

    public function update()
    {

        $i_tanggal =$_POST['i_tanggal'];
        $i_slug =$_POST['i_slug'];
        $i_title =$_POST['i_title'];
        $i_keterangan =$_POST['i_keterangan'];
        $i_id_categori =$_POST['i_id_categori'];
        $id = $_POST['id'];

        $sql = "UPDATE tb_post SET tangggal=:tangggal, slug=:slug, title=:title, keterangan=:keterangan, id_cat=:id_cat WHERE id_post=:id_post";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":tangggal", $i_tanggal);
        $stmt->bindParam(":slug", $i_slug);
        $stmt->bindParam(":title", $i_title);
        $stmt->bindParam(":keterangan", $i_keterangan);
        $stmt->bindParam(":id_cat", $i_id_categori);
        $stmt->bindParam(":id_post",$id);
        $stmt->execute();
    }

}