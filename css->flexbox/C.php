<?php

//.PHP_EOL to cos w stylu <br> lub shift+enter - oznacza koniec lini ktory jest bezpieczny dla wielu systemow operacyjnych, zeby nie bylo bledow i zeby ladnie wygladalo. 

session_start();
$file = fopen("D.xml", "w+");
$xml = "<czlowiek>".PHP_EOL;
$xml .= "<dane>";
$xml .= $_SESSION["a1"];
$xml .= "</dane>".PHP_EOL;
$xml .= "<dane>";
$xml .= $_SESSION["b1"];
$xml .= "</dane>".PHP_EOL;
$xml .= "<dane>";
$xml .= $_SESSION["c1"];
$xml .= "</dane>".PHP_EOL;
$xml .= "<dane>";
$xml .= $_SESSION["d1"];
$xml .= "</dane>".PHP_EOL;
$xml .= "<dane>";
$xml .= $_SESSION["e1"];
$xml .= "</dane>".PHP_EOL;
$xml .= "<dane>";
$xml .= $_SESSION["f1"];
$xml .= "</dane>".PHP_EOL;
$xml .= "<dane>";
$xml .= $_SESSION["g1"];
$xml .= "</dane>".PHP_EOL;
$xml .="</czlowiek>".PHP_EOL;          
fwrite($file,$xml);
fclose($file);
?>
