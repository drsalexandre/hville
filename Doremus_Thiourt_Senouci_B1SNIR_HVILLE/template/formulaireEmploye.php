<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hville</title>
</head>
<body>

<fieldset>
    <legend>Ajouter</legend>
        <form Action="src/inserer_employe.php" Method="POST">

        <label for="nom"> Nom </label><input type="text" id="nom_employe" name="nom_employe"><br>
        <label for="prenom"> Prenom </label><input type="text" id="prenom_employe" name="prenom_employe"><br>
        <label for="poste"> Poste </label><select id="id_post" name="id_post">  <option value="1"> Infirmier(e) </option>
                                                                            <option value="2"> Aide soignant(e) </option>
                                                                            <option value="3"> Chef de service </option>
        
</select><br>
        <input type="submit" value="Enregistrer">
</form>
</fieldset>
</body>
</html>