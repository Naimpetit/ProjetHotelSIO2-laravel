<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <?php include("bootstrap.inc.php"); ?>
        </head>
    <body>
        <?php include("menu.inc.php"); ?>
        <h1>Hôtels</h1>
        <form method="get" action="rechercher">
        <select name="cbohotel" id="cbohotel">
            <option selected>Choisir un hôtel</option>
            <?php
                foreach ($hotels as $hotel) {
                    echo ("<option value='" . $hotel->id . "'>" . $hotel->nom . "</option>");
                }
            ?>
        </select>
        <?php echo ('<input type="submit" name="btnafficherhotel" value="Afficher" class="btn btn-primary"/>'); ?>
        </form>
        <?php 
        if (isset($_GET['btnafficherhotel'])) {
            $id = $_GET['cbohotel'];
            $hotel = App\Models\Hotel::find($id);
            if ($hotel) {
                echo ('<h2>Informations sur l\'hôtel</h2>');
                echo ('<p>Nom : ' . $hotel->nom . '</p>');
                echo ('<p>Adresse : ' . $hotel->rue1 . ' ' . $hotel->rue2 . ' ' . $hotel->cp . '</p>');
                echo ('<p>Ville : ' . $hotel->ville . '</p>');
                echo ('<p>Téléphone : ' . $hotel->telephone . '</p>');
                echo ('Equipements');
                echo ('<ul>');
                foreach ($hotel->equipements as $equipement) {
                    echo ('<li>' . $equipement->libelle . " " . "<img src='../resources/images/" . $equipement->logo . "' width='20' /></li>");
                }
                echo ('</ul>');
                echo ('Photos:');
                echo ('<div class="row">');
                foreach ($hotel->photos as $photo) {
                    echo ('<div class="col-md-4">');
                    echo "<img src='../resources/images/" . $photo->nomfichier . "' width='50' />";
                    echo ('</div>');
                }
                echo ('</div>');
            } else {
                echo ('<p>Aucun hôtel trouvé avec cet ID.</p>');
            }
        }
        ?>
    </body>
</html>