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

    public function getPaketat() {
        $sql = "SELECT * FROM paketat ORDER BY id DESC";
        $result = $this->conn->query($sql);

        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
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

    public function insertPaketa($name, $content, $addImage){
        $name = $this->conn->real_escape_string($name);
        $content = $this->conn->real_escape_string($content);
    
        if (!empty($addImage['name'])) {
            $target_dir = "../assets/images/";
            $target_file = $target_dir . basename($addImage['name']);
            $save_file = "assets/images/" . basename($addImage['name']);
            
            if (move_uploaded_file($addImage['tmp_name'], $target_file)) {
                $query = "INSERT INTO paketat (title, content, image) VALUES ('$name', '$content', '$save_file')";
            } else {
                return false;
            }
        } else {
            $defaultIMG = 'assets/images/box_1.png';
            $query = "INSERT INTO paketat (title, content, image) VALUES ('$name', '$content', '$defaultIMG')";
        }
    
        $result = $this->conn->query($query);
    
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function updatePaketa($id, $name, $content, $image){
        $name = $this->conn->real_escape_string($name);
        $content = $this->conn->real_escape_string($content);
    
        if (!empty($image['name'])) {
            $target_dir = "../assets/images/";
            $target_file = $target_dir . basename($image['name']);
            $save_file = "assets/images/" . basename($image['name']);
            
            if (move_uploaded_file($image['tmp_name'], $target_file)) {
                $query = "UPDATE paketat SET title='$name', content='$content', image='$save_file' WHERE id=$id";
            } else {
                return false;
            }
        } else {
            $query = "UPDATE paketat SET title='$name', content='$content' WHERE id=$id";
        }
    
        $result = $this->conn->query($query);
    
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deletePaketa($id)
    {
        $query = "DELETE FROM paketat WHERE id = $id";
        $result = $this->conn->query($query);

        return $result;
    }

}