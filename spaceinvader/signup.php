<?php require('actions/users/signupAction.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
    <body>
        <main class="landingBody">
            <div class="container">
                <form method="POST">

                    <h1>Inscription</h1>

                    <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>

                    <br>

                    <label for="exampleInputEmail1" class="form-label">Pseudo</label>
                    <input type="text" placeholder="Entrer un pseudo" name="pseudo">

                    <br><br>

                    <label for="exampleInputEmail1" class="form-label">Adresse mail</label>
                    <input type="email" placeholder="Entrer une adresse mail" name="email">

                    <br><br>

                    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                    <input type="password" placeholder="Entrer un mot de passe" name="mdp">

                    <br>

                    <input type="submit" class="submit" value="VALIDER" name="validate">
                    <a href="login.php">
                        <input type="button" class="submit" value="J'AI DÉJÀ UN COMPTE">
                    </a>         
                </form>
            </div>
        </main>
    </body>
</html>