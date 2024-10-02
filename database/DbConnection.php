<?php
class DbConnection {
    private $host = 'localhost';
    private $db = 'CAT1';
    private $user = 'sangutet';
    private $pass = 'Osti!Sangutet@123';
    private $charset = 'utf8';
    private $pdo;

    public function __construct() {
        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
        $options = [
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];

        try {
            $this->pdo = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (Exception $e) {
            error_log($e->getMessage());
            exit('Something weird happened'); 
        }
    }

    public function getPdo() {
        return $this->pdo;
    }
}
