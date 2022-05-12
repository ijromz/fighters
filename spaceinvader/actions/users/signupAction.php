<?php
session_start();
require('actions/database.php');

//Validation du formulaire
if(isset($_POST['validate'])){

    //Vérifier si l'user a bien complété tous les champs
    if(!empty($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['mdp'])){
        
        //Les données de l'user
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_email = htmlspecialchars($_POST['email']);
        $user_password = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

        //Vérifier si l'utilisateur existe déjà sur le site
        $checkIfUserAlreadyExists = $bdd->prepare('SELECT pseudo FROM users WHERE pseudo = ?');
        $checkIfUserAlreadyExists->execute(array($user_pseudo));

        if($checkIfUserAlreadyExists->rowCount() == 0){
            
            //Insérer l'utilisateur dans la bdd
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO users(pseudo, mdp, email)VALUES(?, ?, ?)');
            $insertUserOnWebsite->execute(array($user_pseudo, $user_password, $user_email));

            //Récupérer les informations de l'utilisateur
            $getInfosOfThisUserReq = $bdd->prepare('SELECT id, pseudo, email FROM users WHERE pseudo = ? AND email = ?');
            $getInfosOfThisUserReq->execute(array($user_pseudo, $user_email));

            $usersInfos = $getInfosOfThisUserReq->fetch();

            //Authentifier l'utilisateur sur le site et récupérer ses données dans des variables globales sessions
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $usersInfos['id'];
            $_SESSION['email'] = $usersInfos['email'];
            $_SESSION['pseudo'] = $usersInfos['pseudo'];

            //Rediriger l'utilisateur vers la page d'accueil
            header('Location: login.php');

        }else{
            $errorMsg = "L'utilisateur existe déjà sur le site";
        }

    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }

}