<?php
$r=$_GET['gg'];

$con = new mysqli("127.0.0.1","root","","wedkowanie");
$q="DELETE FROM ryby WHERE `ryby`.`id` ='".$r."'";
mysqli_query($con, $q);
//$wynik=$con->query($q);


?>