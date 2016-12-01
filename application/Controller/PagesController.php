<?php

namespace Mini\Controller;

class PagesController{

    public function index(){
        require APP . 'view/_templates/header.php';
        require APP . 'view/pages/index.php';
    }

}
