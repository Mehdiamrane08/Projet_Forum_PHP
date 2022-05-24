<?php 
    require('actions/users/securityAction.php');
   require('actions/questions/myQuestionsAction.php');
   
?>   
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>

    <div class="container">
     <br><br>
    <?php 

       while($question = $getAllMyQuestions->fetch()){
       ?>
       <div class="card">
        <h5 class="card-header">
            <?php echo $question['titre']; ?>
        </h5>
         <div class="card-body">
            <p class="card-text">
                <?= $question['description']; ?>
             </p>
            <a href="#" class="btn btn-primary">Accéder a la question</a>
            <a href="edit-question.php?id=<?= $question['id']; ?>" class="btn btn-warning">Modifier la question</a>
            <a href="actions/questions/deleteQuestionAction.php?id=<?= $question['id']; ?>" class="btn btn-danger">Supprimer la question</a>
        </div>
        </div>
        <br>
       
       <?php

     }
    ?>
    
</body>
</html>