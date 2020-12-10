<?php

include (__DIR__ . "./header.php");

if (isset($_POST['title']))
{
     echo '<div class="alert alert-success" role="alert"> Successfully added </div>';
}

?>

<form action="?page=addMovie" method="post">
    <div class="form-group">
        <label for="title">Movie title</label>
        <input type="text" name="title" class="form-control" id="title" required>
    </div>
    <div class="form-group">
        <label for="poster">Movie poster</label>
        <input type="text" name="poster" class="form-control" id="poster" required>
    </div>
    <div class="form-group">
        <label for="year">Release year</label>
        <input type="number" name="year" class="form-control" id="year" required>
    </div>

    <button type="submit" class="btn btn-primary" onclick="showAlert()">Save</button>
</form>

<?php  include (__DIR__ . "./footer.php");
