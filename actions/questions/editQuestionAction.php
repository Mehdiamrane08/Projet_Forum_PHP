<?php
require ('actions/database.php');

//Validation du formulaire
if(isset($_POST['validate'])){

    //Vérifier si les champs sont remplis
    if(!empty($_POST['title']) AND !empty($_POST['description']) AND !empty($_POST['content'])){

        // Les données à faire passer dans la requete
        $new_question_title = htmlspecialchars($_POST['title']);
        $new_question_description = nl2br(htmlspecialchars($_POST['description']));
        $new_question_content = nl2br(htmlspecialchars($_POST['content']));
        
        //Modifier les informations de la question qui possède  l'id rentré en parametre dans L'URL
        $editQuestionOnWebsite = $bdd->prepare('UPDATE questions SET titre = ?, description = ?, contenu = ? WHERE id = ?');
        $editQuestionOnWebsite->execute(array($new_question_title, $new_question_description, $new_question_content, $idOfQuestion));

        //Redirection vers la page d'affichage des questions de l'utilisateur
        header('location: my-questions.php');

    }else{
        $errorMsg = " Veuillez compléter tous les champs";
    }
}