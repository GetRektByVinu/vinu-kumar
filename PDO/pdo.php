
<?php

// $name = $_GET["name"];
// $surname = $_GET["surname"];
// $age = $_GET["age"];
// $adress = $_GET["adress"];
// $email = $_GET["email"];

// echo $name . " " . $surname . " " . $age . " " . $adress . " " . $email;

$name = $_post["name"];
$surname = $_post["surname"];
$age = $_post["age"];
$adress = $_post["adress"];
$email = $_post["email"];

echo $name . " " . $surname . " " . $age . " " . $adress . " " . $email;

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>


<!-- <form method="get">
 <input type="text" name="name"><br>
 <input type="text" name="surname"><br>
 <input type="text" name="age"><br>
 <input type="text" name="adress"><br>
 <input type="text" name="email"><br>   
 <input type="submit" name="" id="">
</form> -->

bij get komt die data in de url te staan en bij de post niet


<form method="post">
 <input type="text" name="name"><br>
 <input type="text" name="surname"><br>
 <input type="text" name="age"><br>
 <input type="text" name="adress"><br>
 <input type="text" name="email"><br>   
 <input type="submit" name="" id="">
</form>
    
</body>
</html>