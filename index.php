<?php

include('./src/adapters/pageAdapter.php');
include('./src/adapters/imgAdapter.php');

$imgAdapter = new cs174\hw4\adapters\imgAdapter();
$imgAdapter->imgAdapter();

$pageAdapter = new cs174\hw4\adapters\PageAdapter();
$pageAdapter->render();