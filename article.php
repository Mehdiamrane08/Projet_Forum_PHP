<?php

session_start();

require('actions/questions/showArticleContentAction.php');
require('actions/questions/postAnswerAction.php');
require('actions/questions/showAllAnswersOfQuestionAction.php');


?>

<!DOCTYPE html>
<html lang="fr">

<?php include 'includes/head.php'; ?>

<body>

    <?php include 'includes/navbar.php'; ?>
    <br><br>
    
    <div class="container-article">
    
        <?php
    
            if(isset($errorMsg)){ echo $errorMsg; }
            
            

            if(isset($question_publication_date)){
                ?>
        <div class="card-article">
            <section class="show-content">
                    <h3> <?= $question_title; ?> </h3>
                    <hr>
                    <p><?= $question_content; ?></p>
                    <hr>
                    <small><?= '<a href="profile.php?id=' .$question_id_author .'">'.$question_pseudo_author.' </a> '. $question_publication_date; ?></small>
            </section>

                    <hr>

            <section class="show-answers">

                <form class="form-group" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Réponse :</label>
                        <input id="a" name="answer" class="form-control"></input> 
                        <br>
                        <button id="btn-article" class="btn" type="submit" name="validate">Répondre</button>          
                    </div>
                </form>

                <?php 
                    while($answer = $getAllAnswersOfThisQuestion->fetch()){
                        ?>
                        <div class="card-article-content">
                            <div class="card-header">
                                <?= $answer['pseudo_auteur']; ?>
                            </div>

                            <div class="card-body">
                                <?= $answer['contenu']; ?>
                            </div>
                        </div>
                        <br>
                        <?php
                    }
                ?>

            </section>
        </div>


                <?php
            }
        ?>    

</div>
        


</body>
</html>