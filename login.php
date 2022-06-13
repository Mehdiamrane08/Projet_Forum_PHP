<?php require ('actions/users/loginAction.php'); ?>

<!DOCTYPE html>
<html lang="fr">


<body>

<?php include 'includes/head.php'; ?>
    


<div class="pageLogin">
  
  <div class="titreLogin">
    <h1>La chaine connecté au cosmo</h1>
    <hr>
      <br><br>
      <h2>Connectez Vous ! </h2>
      <h3>Ainsi, vous pourrez poser directement vos questions, échanger avec d'autres utilisateurs ou tous simplement discutez avec des membres de la communauté.</h3>
  </div>


<video id="background-video" autoplay loop muted preload="metadata">

<source src="assets/BackgroundLogin.mp4" type="video/mp4"></video>


    
    <div class="styleLogin">
          <form class="container" method="POST"> <!--La méthode POST sert à transmettre des données exemple Formulaire d'une page PHP à l'autre -->

            <?php 
            if(isset($errorMsg)){echo '<p>'.$errorMsg.'<p>';} ?> <!--ce code php permet dafficher la valeur de la variable-->
            <!-- if isset vérifie si la variable existe Puis grace a ECHO jaffiche dans un <p>html ma variable-->


          <div class="mb-3">
              <label  for="exampleInputEmail1" class="form-label">Pseudo</label>
              <input type="text" class="form-control" name="pseudo" required="required">
          </div> 

          <div class="mb-3">
              <label  for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" required="required">
          </div>

            <button  id="btnlogin" type="submit" class="btn-login" name="validate">Se connecter</button>
            <br><br>
            <a  href="signup.php" id="msgLogin"><p>Je n'ai pas de compte, je m'inscrit</p></a>
          
          </form>

    </div>



</div>


<script src="script.js"></script>
</body>
</html>