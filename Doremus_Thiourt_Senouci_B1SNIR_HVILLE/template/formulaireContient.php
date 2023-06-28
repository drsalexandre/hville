<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hville</title>
</head>
<body>
    <h2>Inserer</h2>
    <form Action="" Method="POST">
        <select name="salle">
            <?php
                require_once('./src/contient/insererSalle.php');
                while ($row = $result->fetch()) {
                    echo "<option value='".$row["ID_SALLE"]."'>".$row["LIBELLE_SALLE"]."</option>";
                }
            ?>
            </select>
            <select name="services">
            <?php
                require_once('./src/contient/insererService.php');
                while ($row = $result->fetch()) {
                    echo "<option value='".$row["ID_SERVICE"]."'>".$row["LIBELLE_SERVICE"]."</option>";
                }
            ?>
            </select>
            <select name="employes">
            <?php
                require_once('./src/contient/insererEmploye.php');
                while ($row = $result->fetch()) {
                    echo "<option value='".$row["ID_EMPLOYE"]."'>".$row["NOM_EMPLOYE"].' '.$row["PRENOM_EMPLOYE"]."</option>";
                }
                
            ?>
            </select><br><br>
        <input type="submit" value="Enregistrer">
    </form>
</body>
</html>