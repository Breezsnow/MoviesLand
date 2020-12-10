<?php

include (__DIR__ . "./header.php");
//echo '<div id="apiMovieList">';

foreach($this->movieList as $movie) {
?>

<div class="card d-inline-flex justify-content-between" style="width: 15rem;">
  <img class="card-img-top" src="<?=$movie['poster']?>" alt="">
  <div class="card-body">
    <h5 class="card-title"><?=$movie['title']?></h5>
    <p class="card-text"><?=$movie['year']?></p>
  </div>
</div>

<?php
}
//echo '</div>';
include (__DIR__ . "./footer.php");

