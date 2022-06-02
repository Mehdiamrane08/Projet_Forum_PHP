<?php

require('actions/database.php');

if(isset($_POST['validate'])){

    if(!empty($_POST['answer'])){

        $user_answer = nl2br(htmlspecialchars($_POST['answer']));
        
        $errorMsg = 'lalalalalal';
        $insertAnswer = $bdd->prepare('INSERT INTO answers(id_auteur, pseudo_auteur, id_question, contenu) VALUES (?, ?, ?, ?)');
        $insertAnswer->execute(array(1, 'felix', 1, 'abc'));
        $errorMsg = $user_answer;
    }

} else {
    $errorMsg = 'icicicicicici';
}