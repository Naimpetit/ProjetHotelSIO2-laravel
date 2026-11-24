<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <?php include("bootstrap.inc.php"); ?>
    </head>
    <body>
        <?php include("menu.inc.php"); ?>

        <h1>Liste des hôtels</h1>
        <ul>
            <?php
                foreach ($hotels as $hotel) { // parcours tout les hôtels
                    echo ("<li>" . $hotel->nom . "
                    <br> - adresse: " . $hotel->rue1 . "
                    <br> - Téléphone: " . $hotel->telephone . "
                    <br> -nombre de chambres: " . $hotel->chambres->count() . "  <!-- compte le nombre de chambres -->
                    <br>- Équipements: " );
                    foreach ($hotel->equipements as $equipement) { // parcours tout les équipements
                        echo $equipement->libelle . " " . "<img src='../resources/images/" . $equipement->logo . "' width='20'>" . ", " ;
                     
                        }
                    foreach ($hotel->photos as $photo) { // parcours toutes les photos
                        echo "<img src='../resources/images/" . $photo->nomfichier . "' width='20'>" . " ";

                        }
                    echo "</li><br>";
                }
            ?>
        </ul>
    </body>
</html>