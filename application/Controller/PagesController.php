<?php

namespace Mini\Controller;

class PagesController{

    public function index(){
        require APP . 'view/_templates/header.php';
        require APP . 'view/index.php';
    }

    public function emergency(){
        require APP . 'view/_templates/header.php';
        require APP . 'view/emergency.php';
    }

    public function contacts(){
        require APP . 'view/_templates/header.php';
        require APP . 'view/contacts.php';
    }

}
