<?php

namespace cs174\hw4\views;

class HomePage {
    function renderHome() {
        ?>
        <h1>Community Jigsaw</h1>
        <div>
        <ul>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <label for="imgPath">New Image: </label>
            <input type="file" id='imgPath' name="imgPath" accept="image" />
            <input type="submit" name="submit" value="Upload">
        </form>
        </div>
        <?php 
    }
}
?>

<?php
    
