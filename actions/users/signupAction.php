<?php
session_start();

require('actions/database.php');

//validation du formulaire
 if(isset($_POST['validate'])){ //ISSET pour verifier si une variable existe
   
    //vérifier si l'user a bien complété tous les champs
    if(!empty($_POST['pseudo']) AND !empty($_POST['lastname']) AND !empty($_POST['firstname']) AND !empty($_POST['password'])){// si !empty (les champs  ne sont pas vides)"empty sans ! alors si les input sont vide"

        //Les données de l'user
        $user_pseudo = htmlspecialchars($_POST['pseudo']); //les variables user_*** me servent a récuper les données de mes imput    HTMLspecialchars eviter qune personne mette du html dans mon site afin de le "pirater"
        $user_lastname = htmlspecialchars($_POST['lastname']);
        $user_firstname = htmlspecialchars($_POST['firstname']);
        $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);//password_hash + PASSWORD_DEFAULT(algorithme par defaut) me permet de crypter le mdp dans la base de données//
        
        //Vérifier si l'utilisateur existe déjà sur le site                                                          
        $checkIfUserAlreadyExists = $bdd->prepare('SELECT pseudo FROM users WHERE pseudo = ?');//permet de vérifier si l'utilisateur es deja inscrit sur le site afin déviter de le réinscrire je demande SELECT le pseudo FROM dans la table de la bdd users Where le pseudo qu'a rentré lutilisateur
        $checkIfUserAlreadyExists->execute(array($user_pseudo));
        
        if($checkIfUserAlreadyExists->rowCount() == 0){

               //Insérer l'utilisateur dans la BDD
               $insertUserOnWebsite = $bdd->prepare('INSERT INTO users(pseudo, nom, prénom, mdp)VALUES(?, ?, ?, ?)');
               $insertUserOnWebsite->execute(array($user_pseudo, $user_lastname, $user_firstname, $user_password));
          
               //Récupérer les informations de l'utilisateur
               $getInfosOfThisUserReq = $bdd->prepare('SELECT id, pseudo, nom, prénom FROM users WHERE nom = ? AND prénom = ? AND pseudo = ?');
               $getInfosOfThisUserReq->execute(array($user_lastname, $user_firstname, $user_pseudo));
               
               $userInfos = $getInfosOfThisUserReq->fetch();

                //Authentifier l'utilisateur sur le site et récupérer ses données dans des variables globales sessions                
               $_SESSION['auth'] = true;
               $_SESSION['id'] = $userInfos['id'];
               $_SESSION['lastname'] = $userInfos['nom'];
               $_SESSION['firstname'] = $userInfos['prénom'];
               $_SESSION['pseudo'] = $userInfos['pseudo'];

               //Rediriger l'utilisateur vers la page d'accueil                
               header('location: index.php');


        }else{
            $errorMsg = "L'utilisateur existe déjà sur le site";
        }

    }else{
        
        $errorMsg = "Veuillez compléter tous les champs..";
    }
};

