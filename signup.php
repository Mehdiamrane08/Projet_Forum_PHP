<?php require('actions/users/signupAction.php'); ?> <!--require la meme utilisation que include -->

<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php'; ?>


<body>
  
<div class="newLogin">


    <video id="background-video" autoplay loop muted preload="metadata">

    <source src="assets/BackgroundLogin.mp4" type="video/mp4"></video>

    <form class="container" method="POST"> <!--La méthode POST sert à transmettre des données exemple Formulaire d'une page PHP à l'autre -->

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pseudo</label>
            <input type="text" class="form-control" name="pseudo" required="required">
          </div> 

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nom</label>
            <input type="text" class="form-control" name="lastname" required="required">
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Prénom</label>
            <input type="text" class="form-control" name="firstname" required="required">
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" required="required">
          </div>
          
          <button type="submit" class="btn btn-primary" name="validate">S'inscrire</button>
          <br><br>
          <a href="login.php"><p>J'ai déjà un compte, je me connecte</p></a>
  

    </form>

</div>



</body>


</html>