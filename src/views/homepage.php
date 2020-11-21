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
<!-- <script type="text/javascript">
    function sendImg()
    {
        var img = document.getElementById("imgPath");
        console.log(img);
        var data = new FormData();
        console.log(data);
        data.append("data", img);
        var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new activeXObject("Microsoft.XMLHTTP");
        xhr.open( 'post', 'index.php', true );
        xhr.send(data);
        console.log("datasent")
    }
</script> -->

<?php
    
