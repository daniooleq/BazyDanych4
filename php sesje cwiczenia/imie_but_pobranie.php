<?php
session_start();
$_SESSION["imie"] = $_GET["imie"];
$_SESSION["but"] = $_GET["but"];
echo "Twoje imię: ";
print_r($_SESSION["imie"]);
    ?>
    <html>
        <A href="imie_but_wyslanie.php"> Dalej</a>
    </html>