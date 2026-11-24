<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <?php include("bootstrap.inc.php"); ?>
    </head>
    <body>
        <?php include("menu.inc.php"); ?>

        <h2>Connexion à un compte client</h2>

        <form method="post" action="connexion"> <!-- formulaire de connexion -->
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />

            Mail : <input type="email" name="txtMail" value="" required /><br><br>
            Mot de passe : <input type="password" name="txtMotpasse" value="" required minlength="8" maxlength="30" /><br><br>
            
            <input type="submit" value="Se connecter" /> <!-- bouton de connexion -->

        </form>

    </body>
</html>