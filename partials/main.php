<?php

require_once __DIR__ . '/../database/db.php';

?>

<main>
  <div class="container">
    <!-- CARDS -->
    <div class="row cards py-5">
      <?php foreach ($movies as $movie) : ?>
        <!-- CARD -->
        <div class="col-3">
          <div class="card">
            <!-- IMMAGINE FILM -->
            <img src="<?php echo "img/$movie->img" ?>" class="card-img-top" alt="Locandina Film">
            <!-- /IMMAGINE FILM -->
            <!-- INFO FILM -->
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
            <!-- /INFO FILM -->
          </div>
        </div>
        <!-- CARD -->
      <?php endforeach; ?>
    </div>
    <!-- /CARDS -->
  </div>
</main>