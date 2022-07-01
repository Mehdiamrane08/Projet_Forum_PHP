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
        <br><br><hr>
          <div class="question-tuto">
          <h1 id="titre-yt">Vous pouvez suivre pour toute autres questions la page youtube officiel Wannakry</h1>
          <br>
              <iframe id="frame-video"  src="https://www.youtube.com/embed/YYPiane4RRI" title="YouTube video player" frameborder="0"       allow="accelerometer;autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
              </iframe>
    </div>
</div>


<script src="script.js"></script>
</body>
</html>