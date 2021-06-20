<?php

namespace App;

class category extends Koneksi {

    Public function __construct ()
    {
        parent::__construct();
    }

    Public function tampil()
    {
        $sql = "SELECT * FROM tb_category";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];
        while ($rows = $stmt->fetch()){
            $data[] = $rows;
        }

        return $data; 
    }

}