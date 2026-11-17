<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <?php include("bootstrap.inc.php"); ?>
    </head>
    <body>
        <?php include("menu.inc.php"); ?>

        <h1>Pages d'accueil Brit hotel</h1>
        <ul>
            <?php
                // foreach ($hotels as $hotel) {
                //     echo ("<li>" . $hotel->nom . "
                //     <br> - adresse: " . $hotel->rue1 . "
                //     <br> - Téléphone: " . $hotel->telephone . "
                //     <br> -nombre de chambres: " . $hotel->chambres->count() . "
                //     <br>- Équipements: " );
                //     foreach ($hotel->equipements as $equipement) {
                //         echo $equipement->libelle . " " . "<img src='../resources/images/" . $equipement->logo . "' width='20'>" . ", " ;
                     
                //         }
                //     foreach ($hotel->photos as $photo) {
                //         echo "<img src='../resources/images/" . $photo->nomfichier . "' width='20'>" . " ";

                //         }
                //     echo "</li><br>";
                // }
            ?>
        </ul>
    </body>
</html>