
<?php require('actions/users/signupAction.php'); ?> <!--require la meme utilisation que include -->

<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php'; ?>


<body>

<div class="loader_flex" id="loader">
  <div class="loader" >
    <div class="imgLoader">
    <img src="assets/loader.gif" alt="loader">
    </div>
  </div>
</div>
  
<div class="newLogin">

 
      <video id="background-video" autoplay loop muted preload="metadata">

    <source src="assets/BackgroundLogin.mp4" type="video/mp4"></video> 

  
    

    <form class="container-form" method="POST" enctype="multipart/form-data"> <!--La méthode POST sert à transmettre des données exemple Formulaire d'une page PHP à l'autre -->

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

          <div class="mb-3">
            <label class="form-label">Image photo de profil</label>
            <input type="file" class="form-control" name="img">
            
          </div>

          
          
          <button type="submit" class="btn btn-primary" name="validate">S'inscrire</button>
          <br><br>
          <a href="login.php"><p>J'ai déjà un compte, je me connecte</p></a>
  

    </form>

</div>


<script src="script.js"></script>
</body>


</html>