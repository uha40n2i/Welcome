<?php

namespace Mini\Controller;

use Mini\Model\Advert;

class AdvertsController{

    public function index(){
        $title = "Annonces";
        $advert = new Advert();
        require APP . 'view/_templates/header.php';
        require APP . 'view/adverts/index.php';
    }

    public function post() {
        $advert = new Advert();
        require APP . 'view/_templates/header.php';
        require APP . 'view/adverts/postannonce.php';
    }
}
