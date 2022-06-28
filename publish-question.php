<?php 
session_start();
      require('actions/users/securityAction.php');
      require('actions/questions/publishQuestionAction.php');    
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>

<?php include 'includes/navbar.php'; ?>
    <br><br>

    <div class="style-question">
      <form class="container" method="POST">

      <?php if(
        isset($errorMsg))
        {
          echo '<p class="text-error">'.$errorMsg.'</p>';
        } elseif(isset($successMsg)) 
        {
          echo '<p class="text-error">'.$successMsg.'</p>';
        }
        ?>

<div class="style-publish">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Titre de la question</label>
          <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Description de la question</label>
          <textarea class="form-control" name="description"></textarea>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Contenu de la question</label>
          <textarea class="form-control" name="content"></textarea>
        </div>
          <button type="submit" class="btn btn-primary" name="validate">Poster la question</button>
      </form>
    </div>
</div>

<div class="question-tuto"></div>

<script src="script.js"></script>
</body>
</html>