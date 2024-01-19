<?php
class Dbh {
    private $host = "localhost";
    private $dbusername = "root";
    private $dbname = "dropoff";
    private $dbpassword = "";


    protected function connect() {
        
            $pdo = new PDO("mysql:host = " . $this->host . "dbname" . $this->dbname, $this->dbusername, $this->dbpassword );
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
    
       
    }
}
?>