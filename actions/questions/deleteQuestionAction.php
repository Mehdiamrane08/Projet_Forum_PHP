<?php
 
session_start();
//Vérifier si l'utilisateur est authentifié au niveau de notre site
if(!isset($_SESSION['auth'])){
    header('location: ../../login.php');
}

require('../database.php');

//Vérifier si L'ID est rentré en paramètre dans L'URL
if(isset($_GET['id']) AND !empty($_GET['id'])){

    //L'ID de la question en paramètre
    $idOfTheQuestion = $_GET['id'];

    //Vérifier si la question existe
    $checkIfQuestionExists = $bdd->prepare('SELECT id_auteur FROM questions WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfTheQuestion));

    if($checkIfQuestionExists->rowCount() > 0){

        //Récuper les infos de la question
        $questionsInfos = $checkIfQuestionExists->fetch();
        if($questionsInfos['id_auteur'] == $_SESSION['id']){

            //Supprimer la question en fonction de son ID rentré en paramètre    
            $deleteThisQuestion = $bdd->prepare('DELETE FROM questions WHERE id = ?');
            $deleteThisQuestion->execute(array($idOfTheQuestion));

            header('Location: ../../my-questions.php');

        }else{
            echo "Vous n'avez pas le droit de supprimer une question qui ne vous appartient pas";
        }

    }else{
        echo "aucune question n'a été trouvée";
    }


}else{

    echo "aucune question n'a été trouvée";
}