<?php
require_once "db.php";

class Paketat
{
    private $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function getPaketaDetails($id){
        $sql = "SELECT * FROM paketat WHERE id = '$id'";
        $result = $this->conn->query($sql);

        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

}