<?php

namespace Creativolab\App;

use PDO;
use PDOException;

class Database {

    private string $host;
    private string $db;
    private string $user;
    private string $password;
    private string $charset;

    public function __construct()
    {
        $this->host = $_ENV["DB_HOST"];
        $this->db = $_ENV['DB_DATABASE'];
        $this->user = $_ENV['DB_USERNAME'];
        $this->password = $_ENV['DB_PASSWORD'];
        $this->charset = $_ENV['DB_CHARSET'];
    }

    public function connect(): PDO
    {
        try{
            $conn = "mysql:host=".$this->host.":3306;dbname=".$this->db.";charset=".$this->charset;
            $options = [
                PDO::ATTR_ERRMODE   =>  PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            return new PDO($conn, $this->user, $this->password, $options);
        } catch(PDOException $e) {
            throw new PDOException("Something went wrong when trying to connect to the database");
        }
    }
}