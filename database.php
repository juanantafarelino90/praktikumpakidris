<?php

class Database
{
    private $host = "localhost";
    private $dbname = "aplikasiweb";
    private $username = "root";
    private $password = "";
    public $conn;

    public function connect()
    {
        $this->conn = new mysqli(
            $this->host,
            $this->username,
            $this->password,
            $this->dbname
        );

        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }

        return $this->conn;
    }
}