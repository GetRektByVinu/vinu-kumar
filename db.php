<?php
class Database {
    public $pdo;

    public function __construct($db ="klant", $host = "localhost:3308", $user = "root", $pass= "") {
    try {
    $this->pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        echo "error: " . $e->getMessage();
     }
    }
    public function insert($naam, $stad){
        $stmt = $this->pdo->prepare("INSERT INTO klanten (naam, stad) VALUES (?, ?)");
        $stmt->execute([$naam, $stad]);
    }
}
$connectie = new Database();
?>