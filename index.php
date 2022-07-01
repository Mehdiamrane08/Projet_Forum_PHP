<?php 
      session_start();
      require('actions/questions/showAllQuestionsAction.php');
     
?>

<!DOCTYPE html>
<html lang="en">
    <?php include 'includes/head.php' ; ?>
<body>
    <?php include 'includes/navbar.php' ; ?>
    
    
<div class="bg-index">
    <div class="container" >

                <form class="style-form">
                    <div class="form-groupe row align-items-center">

                        <div class="col-12 col-lg-8">
                            <input id="search-btn" type="search" name="search" class="form-control">
                        </div>
                        <br><br>
                        <div class="col-12 col-lg-4">
                            <button id="search-btn-btn" class="btn btn-success" type="submit">Rechercher</button>
                        </div>
                    </div>

                </form>
                
                <br>
        <div class="index-flex">
                <?php
                    while($question = $getAllQuestions->fetch()){
                        ?>
                        <br>
                        
                        <div class="card-index">
                            <div class="card-header">
                            <a href="article.php?id= <?php echo $question['id']; ?>">
                                <?php echo $question['titre']; ?>
                            </a>
                            

                            </div>
                            <div class="card-body">
                                <?= $question['description']; ?>

                            </div>
                            <div class="card-footer">
                            Publié par <a href="profile.php?id=<?= $question['id_auteur']; ?>"><?= $question['pseudo_auteur']; ?></a> le <?= $question['date_publication']; ?>

                            </div>  
                        </div>
                        <?php
                    }
                    /* Je vérifie si le paramètre search existe et si sa valeur est différent de '' 
                        Si oui j'affiche le bouton de retour sinon je n'affiche rien */
                    if(isset($_GET["search"]) && $_GET['search'] != ''):
                ?>
                    <a href="index.php" class="btn btn-danger btn-back">Retour</a>
                <?php endif; ?>
        </div>                     
    </div>
</div>

<script src="script.js"></script>

</body>
</html>
