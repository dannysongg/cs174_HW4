<?php

namespace cs174\hw4\adapters;

use cs174\hw4\views as V;

class PageAdapter {
    private $htmlLayout;
    private $view;

    public function render() {
        $this->htmlLayout = new V\layouts\htmlLayout();
        $this->view = new V\homePage();
        $this->htmlLayout->htmlLayout($this->view->renderHome());
    }
}


