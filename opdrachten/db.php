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
    
    public function selectAllUsers(){
        try {
            $stmt = $this->pdo->query("SELECT * FROM klanten");
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            echo "Fout bij ophalen van gebruikers: " . $e->getMessage();
            return false;
        }
    }

    public function update($id, $naam, $stad){
        try {
            $stmt = $this->pdo->prepare("UPDATE klanten SET naam = ?, stad = ? WHERE id = ?");
            $stmt->execute([$naam, $stad, $id]);
        } catch (PDOException $e) {
            echo "Fout bij updaten van gegevens: " . $e->getMessage();
        }
    }

    public function delete($id){
        try {
            $stmt = $this->pdo->prepare("DELETE FROM klanten WHERE id = ?");
            $stmt->execute([$id]);
        } catch (PDOException $e) {
            echo "Fout bij verwijderen van gegevens: " . $e->getMessage();
        }
    }

    public function insertUser($username, $email) {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO klanten (naam, stad) VALUES (?, ?)");
            $stmt->execute([$username, $email]);
        } catch (PDOException $e) {
            throw new PDOException("Fout bij het toevoegen van de gebruiker: " . $e->getMessage());
        }
    }

    public function register($naam, $stad) {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO klanten (naam, stad) VALUES (?, ?)");
            $stmt->execute([$naam, $stad]);
        } catch (PDOException $e) {
            throw new PDOException("Fout bij het registreren van de gebruiker: " . $e->getMessage());
        }
    }
}
$connectie = new Database();
?>