<?php
// Najpierw wejdz w http://localhost/phpmyadmin/  
//potem dodaj baze danych "szkolasyf"
//potem dodaj tabele "dieta"
// Lp int
// Imie text
// Nazwisko text
// Plec text
// Ilosc Int
// Jaki_trening text
// Dieta text
// potem wejdz w http://localhost/sesja1.html
// i bedzie dzialac pozdro

session_start();

$_SESSION["ilosc"] = $_GET["ilosc"];
$_SESSION["jaki"] = $_GET["jaki"];
$_SESSION["dieta"] = $_GET["dieta"];
print_r($_SESSION["imie"]);
echo "<br><br>";
print_r($_SESSION["nazwisko"]);
echo "<br><br>";
print_r($_SESSION["plec"]);
echo "<br><br>";
print_r($_SESSION["ilosc"]);
echo "<br><br>";
print_r($_SESSION["jaki"]);
echo "<br><br>";
print_r($_SESSION["dieta"]);
echo "<br><br>";
$con = new mysqli("127.0.0.1","root","","szkolasyf");
 
// Zmiana definicji tabeli, aby Lp była AUTO_INCREMENT
$alterQuery = "ALTER TABLE `dieta` MODIFY `Lp` INT AUTO_INCREMENT ";
$con->query($alterQuery);


$q="INSERT INTO `dieta` (`Lp`, `Imie`, `Nazwisko`, `Plec`, `Ilosc`, `Jaki_trening`, `Dieta`) VALUES (NULL, '".$_SESSION['imie']."', '".$_SESSION['nazwisko']."', '".$_SESSION['plec']."', '".$_SESSION['ilosc']."', '".$_SESSION['jaki']."', '".$_SESSION['dieta']."');";

$con -> query($q);
    ?>

<?php
$con = new mysqli("127.0.0.1","root","","szkolasyf");
 
$q="SELECT * FROM dieta";
 
if($wynik=$con->query($q))
while($row=$wynik->fetch_array())
echo $row["Lp"] . " ; " . $row["Imie"] . " ; " . $row["Nazwisko"] . $row["Plec"] . " ; " . $row["Ilosc"] . " ; " . $row["Jaki_trening"] . " ; " . $row["Dieta"] ."<br/>";
else
echo $con->errno . " " . $con->error;
?>