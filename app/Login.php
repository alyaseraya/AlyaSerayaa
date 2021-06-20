<?php

namespace App;

class Login extends Koneksi {

    public function __construct()
    {
        parent :: __construct();
    }

    public function proses()
    {
        $i_username = $_POST['i_username'];
        $i_password = $_POST['i_password'];

        $sql = "SELECT * FROM tb_admin WHERE admin_name=:admin_name AND admin_password=:admin_password";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":admin_name", $i_username);
        $stmt->bindParam(":admin_password", $i_password);
        $stmt->execute();

        $row = $stmt->fetch();

        if (!empty($row)) {
            $_SESSION['admin_name'] = $row['admin_name'];
        }else {
            $_SESSION['error'] = "Login error";
        }
    }
}