<?php

$User = "AdminHville";
$Passwd="P@ssword";
$dsn="mysql:host=localhost;dbname=Hville";
try{
$db = new PDO($dsn,$User,$Passwd);
} catch(PDOException $e){
 echo "<P> La base de données n'est pas accessible ! </p>";
}


$result = $db->query("SELECT * FROM employes");

?>