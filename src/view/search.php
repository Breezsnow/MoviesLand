<?php

include (__DIR__ . "./header.php");
?>

<div class="form-group">
    <label for="title">Name of the movie</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Which movie are you looking for ?">
</div>
<button id="search" class="btn btn-primary">Search</button>

<div id="apiMovieList"></div>
<?php
include (__DIR__ . "./footer.php");
