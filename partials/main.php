<?php

require_once __DIR__ . '/../database/db.php';

?>

<main>
  <div class="container">
    <div class="row">
      <?php foreach ($movies as $movie) : ?>
        <div class="col-4">
          <div class="card" style="width: 18rem;">
            <img src="<?php echo "img/$movie->img" ?>" class="card-img-top" alt="Locandina Film">
            <div class="card-body">
              <h5 class="card-title">Titolo Originale</h5>
              <p class="card-text">
                <?php echo $movie->original_title; ?>
              </p>
              <h5 class="card-title">Anno di uscita</h5>
              <p class="card-text">
                <?php echo $movie->year; ?>
              </p>
              <h5 class="card-title">Lingue originali</h5>
              <p class="card-text">
                <?php $movie->showGenres($movie->languages); ?>
              </p>
              <h5 class="card-title">Generi</h5>
              <p class="card-text">
                <?php $movie->showGenres($movie->genres); ?>
              </p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</main>