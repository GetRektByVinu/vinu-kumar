<?php
class Database {
    public $pdo;

    public function __construct($db ="test", $host = "localhost:3308", $user = "root", $pass= "") {
    try {
    $this->pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connectie is gemaakt";
    } catch (Exception $e) {
        echo "error: " . $e->getMessage();
     }
    }
}
$connectie = new Database();
?>