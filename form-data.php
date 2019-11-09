<?php

$name = $_POST['name'];
$dob = $_POST['dob'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$position = $_POST['position'];
$club = $_POST['club'];

$mysqli = new mysqli("localhost", "root", "password", "athletebase");
$mysqli->query("INSERT INTO `athleteaccount`(`Name`, `DOB`, `Height`, `Weight`, `Position`, `Club`) VALUES('$name', '$dob', '$weight', '$height', '$position', '$club');");

header("Location: account.php"); ?>

?>