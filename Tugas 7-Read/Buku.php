<?php
require_once "Database.php";

class Buku {

    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function tampilData() {
        $sql = "SELECT * FROM buku";
        $result = $this->db->conn->query($sql);
        return $result;
    }
}
