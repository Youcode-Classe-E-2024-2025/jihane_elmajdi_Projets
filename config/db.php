<?php

class Database
{
    private $host = 'localhost'; 
    private $dbname = 'Packages';
    private $username = 'root';
    private $password = ''; 
    private $pdo; 

    // Méthode pour établir la connexion
    public function connect()
    {
        try {
            // Vérifier si une connexion existe déjà
            if ($this->pdo === null) {
                $this->pdo = new PDO(
                    "mysql:host=$this->host;dbname=$this->dbname;charset=utf8",
                    $this->username,
                    $this->password
                );
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return $this->pdo;
        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }
    }
}
