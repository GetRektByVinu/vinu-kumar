<?php
include 'db.php';
$db = new Database();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $db->register($_POST['naam'], $_POST['stad']);
        echo "Klant is succesvol geregistreerd.";
    } catch (PDOException $e) {
        die("Fout bij het registreren van de klant: " . $e->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klant registreren</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="naam" placeholder="Naam">
        <input type="text" name="stad" placeholder="Stad">
        <input type="submit" value="Registreren">
    </form>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Naam</th>
            <th>Stad</th>
        </tr>

        <?php
        $users = $db->selectAllUsers();
        if ($users) {
            foreach ($users as $user) {
                ?>
                <tr>
                    <td><?php echo $user['id_klanten']?></td>
                    <td><?php echo $user['naam']?></td>
                    <td><?php echo $user['stad']?></td>
                </tr>
                <?php
            }
        }
        ?>
    </table>
</body>
</html>
