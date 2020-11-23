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
            <input type="file" id='imgPath' name="imgPath" accept="image" onchange="validateFile(this)">
            <input type="submit" name="submit" value="Upload">
        </form>
        </div>
        <div class="jigsaw-board">
            <?php
                $permFile = fopen("./src/resources/active_image.txt", "r");
                $perm = explode(" ", fread($permFile,filesize("./src/resources/active_image.txt")));
                foreach ($perm as $tile){
                    ?>
                    <div id="<?="tile".$tile?>" class = "tile" onclick="highlightTile(this)"></div>
                    <?php
                }
            ?>
        </div>
        <?php 
    }
}
?>
<?php
    
