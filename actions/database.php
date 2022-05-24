<!-- database.php me permet de relier ma base de données a mon projet -->
<?php
try{ //Try essaye de se connecter a la base de données,SI il n'y arrive pas alors Catch//
    $bdd = new PDO('mysql:host=localhost;dbname=Projet_Final;charset=utf8;','root','le_mot_de_pass_choisi');
    // classe PDO nous permet de faire des requete SQL //
}catch(Exception $e){
    
     die('Une erreur a été trouvée :' . $e->getMessage());
}

  