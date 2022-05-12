<?php require('actions/users/loginAction.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
    <body>
        <main class="landingBody">
            <div class="container">
                    <form method="POST">

                        <h1>Connexion</h1>

                        <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>

                        <br>

                        <label for="exampleInputEmail1" class="form-label">Pseudo</label>
                        <input type="text" placeholder="Entrer le pseudo" name="pseudo">

                        <br><br>

                        <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                        <input type="password" placeholder="Entrer le mot de passe" name="mdp">
                        
                        <br>

                        <input type="submit" class="submit" value="SE CONNECTER" name="validate">
                        <a href="signup.php">
                            <input type="button" class="submit" value="S'INSCRIRE">
                        </a>
                    </form>
            </div>
        </main>
    </body>
</html>