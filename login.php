<?php require ('actions/users/loginAction.php'); ?>

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
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <button type="submit" class="btn btn-primary" name="validate">Se connecter</button>
  <br><br>
  <a href="signup.php"><p>Je n'ai pas de compte, je m'inscrit</p></a>

</form>


</body>
</html>