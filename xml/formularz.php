<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
<h1>Formularz<h1>
<form action="formularz.php" method="POST">
Imię:<input name="imionko" id="imie"><br>
Kolor oczu:<select name="Kolor" id="oczy"><br>
<option value="niebieskie">niebieskie</option>
<option value="brązowe">brązowe</option>
<option value="zielone">zielone</option>
<option value="szare">szare</option>
<option value="piwne">piwne</option>
</select>
<br>

IQ:<input name="IQ" id="iq1"><br>
Skala:<select name="Skala" id="skala1">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>
<input type="submit" name="Submit" value="wyslij" >
</form>

<?php




if($_SERVER['REQUEST_METHOD'] == 'POST'){
$imionko = $_POST['imionko'];
$kolor = $_POST['Kolor'];
$IQ = $_POST['IQ'];
$Skala = $_POST['Skala'];

$xmlFile = 'laski.xml';
$xml = simplexml_load_file($xmlFile);

$marker = $xml->addChild('marker');
$marker->addAttribute('imie', $imionko);
$marker->addAttribute('oczy', $kolor);
$marker->addAttribute('iq1', $IQ);
$marker->addAttribute('skala1', $Skala);

echo $xml->asXML();
$xml->asXML($xmlFile);

}

?>

</select>
</body>
</html>