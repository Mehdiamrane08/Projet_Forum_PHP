<?php
    session_start(); 
    require('actions/users/showOneUsersProfileAction.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>
    <br><br>

    <div class="container-profile">
        <?php
        if(isset($errorMsg)) { echo $errorMsg; } 


        if(isset($getHisQuestions)){
            $image = base64_encode($user_image);
            ?>

            <div class="card card-imgprofile">
                    <div class="card-body">
                        <h4>@<?= $user_pseudo; ?></h4>
                        <hr>
                        <p><?= $user_lastname. ' ' . $user_firstname; ?></p>
                        <?= '<img class="allimg clickimage" src="data:image/png|image/jpeg|image/gif|image/jpg;base64, '.$image.'"/>'; ?>
                    </div>
            </div>
                <br>
                <?php
                while($question = $getHisQuestions->fetch()){
                    ?>
                    <div class="card card-profile">
                            <div class="card-header">
                                <?= $question['titre']; ?>
                            </div>  

                        <div class="card-body">
                            <?= $question['description']; ?>
                        </div> 

                        <div class="card-footer">
                            <? $question['pseudo_auteur']; ?> le <?= $question['date_publication']; ?>
                        </div>
                    </div>
            <br>

            <?php
            }

            
        }
        
        
        ?>
    </div>    



    <script src="script.js"></script>

</body>
</html>