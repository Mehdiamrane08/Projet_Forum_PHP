
<!--  -->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <!-- <a class="navbar-brand">Forum</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
    <i class="fa-solid fa-bars" id="hamburger"></i>
    </button> 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav d-flex justify-content-center align-items-center w-100 mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Les questions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="publish-question.php">Publier un article</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="my-questions.php">Mes Questions</a>
        </li>
        <?php 
          if(isset($_SESSION['auth'])){
          ?>
        <li class="nav-item">
          <a class="nav-link" href="profile.php?id=<?= $_SESSION['id']; ?>">Mon Profil</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="actions/users/logoutAction.php">Déconnexion</a>
        </li> 
          <?php
            }
           ?>
      </ul>
      
    </div>
  </div>
</nav> 

<script src="https://kit.fontawesome.com/9ea206a6a5.js" crossorigin="anonymous"></script>


