<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
 
</head>
<body>
<form method="get" action="sesja3.php">
Ile treningów robisz w tygodniu: <input type="number" name="ilosc"> <br><br>
<select name="jaki">
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
    <option value="D">D</option>
</select><br><br>
Jaką masz diete: <input type="text" name="dieta"> <br><br>
<button type="submit">Wyślij</button>
</form>
<html>
<?php
session_start();
$_SESSION["imie"] = $_GET["imie"];
$_SESSION["nazwisko"] = $_GET["nazwisko"];
$_SESSION["plec"] = $_GET["plec"];

print_r($_SESSION["imie"]);
echo "<br>";
print_r($_SESSION["nazwisko"]);
echo "<br>";
print_r($_SESSION["plec"]);

    ?>