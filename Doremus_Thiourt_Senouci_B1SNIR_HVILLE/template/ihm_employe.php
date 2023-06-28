<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hville</title>
</head>
<body>
    <?php
    $Host="localhost";
    $User = "AdminHville";
    $Passwd="P@ssword";
    $BD="hville";
    $connexion= mysqli_connect($Host,$User,$Passwd,$BD);
    
    $requete = "SELECT `id_employe`, `id_post`, `nom_employe`, `prenom_employe` FROM `employes`;"; 
    $listeEmploye = mysqli_query($connexion,$requete);
    
    echo "<table border=\"1\"><tr><th> id employe </th><th> id post </th><th> nom </th><th> prenom </th></tr>";
    
    while($ligne = mysqli_fetch_row($listeEmploye)){
    echo 
    "<tr><td>$ligne[0]</td><td>$ligne[1]</td><td>$ligne[2]</td><td>$ligne[3]</td></tr>";
    }
    
    echo "</table>";

    

    ?>
</body>
</html>