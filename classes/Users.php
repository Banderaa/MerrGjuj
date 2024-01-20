<?php
session_start();
require_once "db.php";

class Users
{
    private $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function attemptLogin($username, $password)
    {
        if (empty($username) || empty($password)) {
            if (empty($username)) {
                echo '<script> alert("Username is empty!")</script>';
            }

            if (empty($password)) {
                echo '<script> alert("Password is empty!")</script>';
            }
        } else {
            $encrypted_password = md5($password);
            $sql = "SELECT id, username FROM users WHERE (username = '$username' OR email = '$username') AND password = '$encrypted_password'";
            $result = $this->conn->query($sql);

            if ($result) {
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['username'] = $row['username'];

                    header("Location: index.php");
                    exit();
                } else {
                    echo '<script> alert("Invalid username or password!")</script>';
                }
            } else {
                echo '<script> alert("Error while login, please try again!")</script>';
            }
        }
    }

    public function attemptRegister($username, $email, $password)
    {
        if (empty($username) || empty($email) || empty($password)) {
            if (empty($username)) {
                echo '<script> alert("Username is empty!")</script>';
            }

            if (empty($password)) {
                echo '<script> alert("Password is empty!")</script>';
            }

            if (empty($email)) {
                echo '<script> alert("Email is empty!")</script>';
            }
        } else {
            $encrypted_password = md5($password);
            $sql = "INSERT INTO users (`username`, `email`, `password`, `role_id`) VALUES ('$username', '$email', '$encrypted_password', '2')";
            $result = $this->conn->query($sql);
            if ($result) {
                header("Location: login.php");
                exit();
            } else {
                echo '<script> alert("Error while registering, please try again!")</script>';
            }
        }
    }

    public function logout()
    {
        $_SESSION = array();
        session_destroy();
        header("Location: ../index.php");
        exit();
    }
}
