<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    






<div> 
 



<?php
$con = new mysqli("127.0.0.1","root","","sklep");
$par="3";
$mar='o%';
$q="SELECT * FROM samochody WHERE id>". $par." AND marka like '$mar'"; 

//$wt='T%';
//$q="SELECT * FROM samochody where id>$par && marka like '" . $wt . "';";;




if($wynik=$con->query($q))
while($row=$wynik->fetch_array())
echo $row["id"] . ";" .$row["marka"] . ";" .$row["model"] . ";" .$row["rocznik"] . ";" .$row["kolor"] . ";" .$row["stan"] . ";  <br/>";
else
echo $con->errno . " " . $con->error;




?>
</p>
</div>

</body>
</html>
