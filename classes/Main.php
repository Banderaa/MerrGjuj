<?php
require_once "db.php";

class Main
{
    private $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function getPaketat() {
        $sql = "SELECT * FROM paketat ORDER BY id DESC LIMIT 3";
        $result = $this->conn->query($sql);

        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    public function getKomentet() {
        $sql = "SELECT * FROM komentet";
        $result = $this->conn->query($sql);

        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    public function getBanerat() {
        $sql = "SELECT * FROM banners";
        $result = $this->conn->query($sql);

        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }
    public function getBaneratById($id) {
        $sql = "SELECT * FROM banners WHERE id = '$id'";
        $result = $this->conn->query($sql);

        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }
    public function insertBanner($name, $subtitle, $addImage){
        $name = $this->conn->real_escape_string($name);
        $subtitle = $this->conn->real_escape_string($subtitle);
    
        if (!empty($addImage['name'])) {
            $target_dir = "../assets/images/";
            $target_file = $target_dir . basename($addImage['name']);
            $save_file = "assets/images/" . basename($addImage['name']);
            
            if (move_uploaded_file($addImage['tmp_name'], $target_file)) {
                $query = "INSERT INTO banners (title, subtitle, image) VALUES ('$name', '$subtitle', '$save_file')";
            } else {
                return false;
            }
        } else {
            $defaultIMG = 'assets/images/banner_2.jpg';
            $query = "INSERT INTO banners (title, subtitle, image) VALUES ('$name', '$subtitle', '$defaultIMG')";
        }
    
        $result = $this->conn->query($query);
    
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function updateBanner($id, $title, $subtitle, $image){
        $title = $this->conn->real_escape_string($title);
        $subtitle = $this->conn->real_escape_string($subtitle);
    
        if (!empty($image['name'])) {
            $target_dir = "../assets/images/";
            $target_file = $target_dir . basename($image['name']);
            $save_file = "assets/images/" . basename($image['name']);
            
            if (move_uploaded_file($image['tmp_name'], $target_file)) {
                $query = "UPDATE banners SET title='$title', subtitle='$subtitle', image='$save_file' WHERE id=$id";
            } else {
                return false;
            }
        } else {
            $query = "UPDATE banners SET title='$title', subtitle='$subtitle' WHERE id=$id";
        }
    
        $result = $this->conn->query($query);
    
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function deleteBanner($id)
    {
        $query = "DELETE FROM banners WHERE id = $id";
        $result = $this->conn->query($query);

        return $result;
    }

    public function getContacts() {
        $sql = "SELECT * FROM contact_us";
        $result = $this->conn->query($sql);

        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }
    public function getContactsById($id) {
        $sql = "SELECT * FROM contact_us WHERE id = '$id'";
        $result = $this->conn->query($sql);

        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }
    public function contactUsSubmit($name, $lastname, $email, $descripton){
        $name = $this->conn->real_escape_string($name);
        $lastname = $this->conn->real_escape_string($lastname);
        $email = $this->conn->real_escape_string($email);
        $descripton = $this->conn->real_escape_string($descripton);
    
        $query = "INSERT INTO contact_us (name, surname, email, description) VALUES ('$name', '$lastname', '$email', '$descripton')";
        $result = $this->conn->query($query);
    
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}