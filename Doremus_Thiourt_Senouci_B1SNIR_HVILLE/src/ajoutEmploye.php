<?php
if(isset($_POST['id_post']) && isset($_POST['nom_employe']) && isset($_POST['prenom_employe'])){
$id_post = $_POST['id_post'];
$nom_employe = $_POST['nom_employe'];
$prenom_employe = $_POST['prenom_employe'];

$User = "AdminHville";
$Passwd="P@ssword";
$dsn="mysql:host=localhost;dbname=Hville";
try{
$db = new PDO($dsn,$User,$Passwd);
} catch(PDOException $e){
 echo "<P> La base de données n'est pas accessible ! </p>";
}

$prenom_employe= $db->quote($prenom_employe); 
$nom_employe= $db->quote($nom_employe);
$id_post= $db->quote($id_post);

$requete = "INSERT INTO `hville`.`employes` (`id_employe`, `id_post`, `nom_employe`, `prenom_employe`) 
VALUES (NULL, $id_post, $nom_employe, $prenom_employe);";
echo $requete;
$res = $db->query($requete);
if($res == false){
 echo "<P>requete echouée</p>";
}
}
?>