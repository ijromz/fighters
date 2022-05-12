<?php require('actions/users/loginAction.php'); ?>
<?php require('actions/database.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
    <body>
        <main class="landingBody">
            <div class="container_home">
                <div>
                    <?php ?>
                </div>
                <div class="player_name">
                    <p> Player : <?php echo $_SESSION['pseudo']; ?> </p>
                </div>
                <a href="">
                    <input type="submit" class="submit" value="PLAY">  
                </a>
                <a href="">
                    <input type="button" class="restart" value="RESTART"> 
                </a>
            </div>
        </main>
    </body>
</html>