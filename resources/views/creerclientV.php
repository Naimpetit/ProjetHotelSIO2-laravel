<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <?php include("bootstrap.inc.php"); ?>
    </head>
    <body>
        <?php include("menu.inc.php"); ?>

        <h2>Création d'un compte client</h2>

        <form method="post" action="client">  <!-- formulaire de création de compte -->
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />

            Nom : <input type="text" name="txtNom" value="" required /><br><br>
            Mail : <input type="email" name="txtMail" value="" required  /><br><br>
            Mot de passe : <input type="password" name="txtMotpasse" value="" required minlength="8" maxlength="30" /><br><br>
            
            <input type="submit" value="Créer le compte" /> <!-- bouton de création de compte -->

        </form>

    </body>
</html>