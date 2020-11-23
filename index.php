<?php

require "vendor/autoload.php";

use cs174\hw4\adapters;

$imgAdapter = new cs174\hw4\adapters\ImgAdapter();
$imgAdapter->imgAdapter();

$pageAdapter = new cs174\hw4\adapters\PageAdapter();
$pageAdapter->render();

?>
<script src="./src/jigsaw.js"></script>
<?php