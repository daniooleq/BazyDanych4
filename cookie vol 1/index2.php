<?php
session_start();
echo "Twoje imie to: ";
print_r($_SESSION["imie"]);
echo "<br>";
echo "Twój numer buta to: ";
print_r($_SESSION["but"]);
echo "<br> ";
    ?>
