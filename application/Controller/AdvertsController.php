<?php

namespace Mini\Controller;

use Mini\Model\Advert;

class AdvertsController{

    public function index(){
        $title = "Annonces";
        $advert = new Advert();
        require APP . 'view/_templates/header.php';
        require APP . 'view/adverts/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function post() {
        $title = "Envoyer Annonces";
        $advert = new Advert();
        require APP . 'view/_templates/header.php';
        require APP . 'view/adverts/postannonce.php';
        require APP . 'view/_templates/footer.php';
    }

    public function delete() {
        $advert = new Advert();
        require APP . 'view/adverts/deleteannonce.php';
    }
}
