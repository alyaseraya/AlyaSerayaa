<?php

namespace App;
use PDO;

class Koneksi{
    protected object $db;
   
    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=localhost;dbname=db_blog", "root", "");
        } catch (\Exception $e) {
            die ("Error : " . $e->getMessage());
         }
    }
}