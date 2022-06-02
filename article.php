<?php 
session_start();
require('actions/questions/postAnswerAction.php');
require('actions/questions/showArticleContentAction.php');

?>

<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php'; ?>

<body>

    <?php include 'includes/navbar.php'; ?>
    <br><br>
    
    <div class="container">

        <?php

            if(isset($errorMsg)){ echo $errorMsg; }
            
            

            if(isset($question_publication_date)){
                ?>

        <section class="show-content">
                <h3> <?= $question_title; ?> </h3>
                <hr>
                <p><?= $question_content; ?></p>
                <hr>
                <small><?= $question_pseudo_author . ' ' . $question_publication_date; ?></small>
        </section>

                <hr>

        <section class="show-answers">

            <form class="form-group" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Réponse :</label>
                    <input id="a" name="answer" class="form-control"></input> 
                    <br>
                    <button id="b" class="btn btn-primary" type="submit" name="validate">Répondre</button>          
                </div>
            </form>

        </section>


                <?php
            }
        ?>    

</div>
        


</body>
</html>