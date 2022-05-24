<?php require('actions/users/signupAction.php'); ?> <!--require la meme utilisation que include -->

<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php'; ?>

<body>
  <br><br>
 <form class="container" method="POST"> <!--La méthode POST sert à transmettre des données exemple Formulaire d'une page PHP à l'autre -->

<?php 
if(isset($errorMsg)){echo '<p>'.$errorMsg.'<p>';} ?> <!--ce code php permet dafficher la valeur de la variable-->
<!-- if isset vérifie si la variable existe Puis grace a ECHO jaffiche dans un <p>html ma variable-->

   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Pseudo</label>
    <input type="text" class="form-control" name="pseudo">
  </div> 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nom</label>
    <input type="text" class="form-control" name="lastname">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Prénom</label>
    <input type="text" class="form-control" name="firstname">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <button type="submit" class="btn btn-primary" name="validate">S'inscrire</button>
  <br><br>
  <a href="login.php"><p>J'ai déjà un compte, je me connecte</p></a>
</form>

</body>
</html>