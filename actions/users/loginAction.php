<?php 
session_start();
require ('actions/database.php');

//validation du formulaire
if(isset($_POST['validate'])){ //ISSET pour verifier si une variable existe
   
    //vérifier si l'user a bien complété tous les champs
    if(!empty($_POST['pseudo']) AND !empty($_POST['password'])){// si !empty (les champs  ne sont pas vides)"empty sans ! alors si les input sont vide"

        //Les données de l'user
        $user_pseudo = htmlspecialchars($_POST['pseudo']); //les variables user_*** me servent a récuper les données de mes imput    HTMLspecialchars eviter qune personne mette du html dans mon site afin de le "pirater"
        $user_password = htmlspecialchars($_POST['password']); //ici on ne crypte pas le mdp 

        //on vérifie si l'utilisateur existe(si le pseudo est corrrect)
        $checkIfUserExists = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
        $checkIfUserExists->execute(array($user_pseudo));

        if($checkIfUserExists->rowCount() > 0 ){

            //Nous récuperons les données de l'utilisateur 
            $usersInfos = $checkIfUserExists->fetch();

            //Nous vérifions si le mot de passe est correct
            if(password_verify($user_password, $usersInfos['mdp'])){

                 //Authentifier l'utilisateur sur le site et récupérer ses données dans des variables globales sessions                
               $_SESSION['auth'] = true;
               $_SESSION['id'] = $usersInfos['id'];
               $_SESSION['lastname'] = $usersInfos['nom'];
               $_SESSION['firstname'] = $usersInfos['prénom'];
               $_SESSION['pseudo'] = $usersInfos['pseudo'];

               //On redirige l'utilisateurs vers la page d'accueil 'index.php'
               header('Location: index.php');

            }else{
                $errorMsg ="Votre mot de passe ou le pseudo est incorrect...";
            }

        }else{
            $errorMsg = "Votre mot de passe ou le pseudo est incorrect...";
        }

    }else{
        
        $errorMsg = "Veuillez compléter tous les champs..";
    }
}