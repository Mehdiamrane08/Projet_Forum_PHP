<?php 

require('actions/database.php');

//V2rifier si L'id de la question est rentré dans L'URL
if(isset($_GET['id']) AND !empty($_GET['id'])){

    //Récuper L'id de la question
    
    $idOfTheQuestion = $_GET['id'];
    

    //Vérifer si la question existe
    $checkIfQuestionExists = $bdd->prepare('SELECT * FROM questions WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfTheQuestion));

    if($checkIfQuestionExists->rowCount() > 0){
        
        //Récuperer toutes les données de la question   
        $questionsInfos = $checkIfQuestionExists->fetch();
       
        //Stock les données de la question dans des variables propres
        $question_title = $questionsInfos['titre'];
        $question_content = $questionsInfos['contenu'];
        $question_id_author = $questionsInfos['id_auteur'];
        $question_pseudo_author = $questionsInfos['pseudo_auteur'];
        $question_publication_date = $questionsInfos['date_publication'];

        
        
        

    }else{
        $errorMsg =  "aucune questions n'a été trouvée";
        
    }
    

}else{

    $errorMsg =  "aucune questions n'a été trouvée";
      
}