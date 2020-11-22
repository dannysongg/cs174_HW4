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
        <div class="jigsaw-board">
            <div class="one">0,0</div>
            <div class="two">0,1</div>
            <div class="three">0,2</div>
            <div class="four">1,0</div>
            <div class="five">1,1</div>
            <div class="six">1,2</div>
            <div class="seven">2,0</div>
            <div class="eight">2,1</div>
            <div class="nine">2,2</div>
        </div>
        <?php 
    }
}
?>

<?php
    
