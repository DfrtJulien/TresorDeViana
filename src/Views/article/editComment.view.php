<?php
require_once(__DIR__ . "/../partials/head.php");
?>

<section class="infoArticleContainer">
  <div class="flexContainer">
    <div>
      <img src="" alt="<?= $myArticle->getTitle() ?>" class="articleImg">
    </div>
    <div class="infoContainer">
      <h2 class="articleTitle"><?= $myArticle->getTitle() ?></h2>
      <p class="articleDescription"><?= $myArticle->getDescription() ?></p>
      <form method="POST">
        <label for="editComment">Modifier votre commentaire :</label>
        <textarea name="editComment" id="editComment"><?= $comment->getContent() ?></textarea>
        <?php
        if (isset($this->arrayError['editComment'])) {
        ?>
          <div class="alert alert-danger" role="alert">
            <p class='text-danger'><?= $this->arrayError['editComment'] ?></p>
          </div>
        <?php
        } ?>
        <button type="submit" class="addComentBtn">Modifier son commentaire</button>
      </form>
    </div>
  </div>
</section>

<?php
include_once(__DIR__ . "/../partials/footer.php");
?>