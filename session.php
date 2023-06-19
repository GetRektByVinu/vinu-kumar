<?php
session_start();
$naam = $_SESSION['naam'];
$email = $_SESSION['email'];

echo $naam . ' ' . $email;

session_destroy();
?>