<?php

class User
{

    private $conn;
    private $table = "users";

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    // REGISTER
    public function create($username, $email, $asal, $password)
    {
        $sql = "INSERT INTO $this->table (username, email, asal, password)
                VALUES ('$username', '$email', '$asal', '$password')";

        if ($this->conn->query($sql)) {
            return true;
        } else {
            return false;
        }
    }

    // LOGIN
    public function login($username, $password)
    {
        $sql = "SELECT * FROM $this->table
                WHERE username = '$username'
                AND password = '$password'";

        $result = $this->conn->query($sql);

        if ($result && $result->num_rows > 0) {
            return true;
        }

        return false;
    }
    public function getAllUsers()
    {
        $sql = "SELECT * FROM $this->table";
        $result = $this->conn->query($sql);

        if ($result ->num_rows > 0) {
            return $result;
        } else {
            return false;
        }

        
    }
    public function hapus($id){
        $sql = "DELETE FROM $this->table WHERE id = " . $id;
        $result = $this->conn->query($sql);
        return $result;
    }
}
?>