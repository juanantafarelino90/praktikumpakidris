<?php
class User
{
    private $conn;
    private $table = "users";

    public function __construct($db)
    {
        $this->conn = $db;
    }

    // CREATE
    public function create($username, $email, $asal, $password)
    {
        $sql = "INSERT INTO $this->table (username, email, asal, password) 
                VALUES ('$username', '$email', '$asal', '$password')";

        if ($this->conn->query($sql)) {
            echo "Data berhasil ditambahkan <br>";
        } else {
            echo "Error: " . $this->conn->error;
        }
    }

    public function login($username, $password){

        $sql = "SELECT * FROM " . 
        $this->table . " WHERE username = '".
        $username . "' AND password = '".
        $password ."'";

        $result = $this->conn->query($sql);
         
        if(!$result->num_rows>0){
            echo "Login gagal";
            die;
        }

    }
}