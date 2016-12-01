<?php

namespace Mini\Controller;

class AdvertsController{

    public function index(){
        require APP . 'view/_templates/header.php';
        require APP . 'view/adverts/index.php';
    }

}
