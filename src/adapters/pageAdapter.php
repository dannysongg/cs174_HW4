<?php

namespace cs174\hw4\adapters;
require_once('./src/views/layouts/htmlLayout.php');
require_once('./src/views/homePage.php');

use cs174\hw4\views as V;

class PageAdapter {
    private $htmlLayout;
    private $view;

    public function render() {
        $this->htmlLayout = new V\layouts\htmlLayout();
        if (isset($_GET['a'])) {
            $action = $_GET['a'];
        }
        else {
            $this->view = new V\homePage();
            $this->htmlLayout->htmlLayout($this->view->renderHome());
        }
    }
}


