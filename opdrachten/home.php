<?php
include 'db.php';
$db = new Database();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $db->insert($_POST['naam'], $_POST['stad']);
        echo "Klant is succesvol toegevoegd aan de database.";
    } catch (PDOException $e) {
        die("Fout bij het toevoegen van de klant: " . $e->getMessage());
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klant toevoegen</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="naam" placeholder="Naam">
        <input type="text" name="stad" placeholder="Stad">
        <input type="submit" value="Toevoegen">
    </form>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Stad</th>
            <th>Email</th>
        </tr>
        

    <tr> <?php
      $users = $db->selectALLUsers();
      if ($users) {
        foreach ($users as $user) {?>
       <td><?php echo $user['naam']?></td>
       <td><?php echo $user['stad']?></td>   
    </tr> <?php } }?>
    </table>
</body>
</html>