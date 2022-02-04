
<?php

include_once ('movieDB.php');

$movieDB = new movieDB();
$genres = $movieDB->get_genres();
//echo "<pre>";
//print_r($genres);


   
?>

<html>
<h1>Movie Genre</h1>
<form action="form.php" method="POST">
<label for="fname">Name</label>
<input type="text" name="fname"><br>
</br>
<label for="sname">Last Name</label>
<input type="text" name="sname"><br>
</br>
<label for="genre">Select Genre</label>
<select name="genre">

    <?php
        foreach ($genres as $genre) {
            echo '<option value="'. $genre['genre'] . '">' . $genre['genre'] . '</option>';
        }

        ?>
        </select>
        <br><input type="submit" value="Get Movie">

</form>

<?php

if (!$movie_by_genre) {
    echo '</html>';
    die;
}
?>

</html>