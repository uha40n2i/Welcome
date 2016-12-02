<?php

namespace Mini\Controller;

use Mini\Libs\PHPExcel;
use Mini\Libs\PHPExcel_IOFactory;

class PagesController{

    public function index(){
        $title = "Accueil";
        require APP . 'view/_templates/header.php';
        require APP . 'view/index.php';
    }

    public function emergency(){
        $title = "Urgences";
        require APP . 'view/_templates/header.php';
        require APP . 'view/emergency.php';
    }

    public function contacts(){
        $title = "Contacts";
        require APP . 'view/_templates/header.php';
        require APP . 'view/contacts.php';
    }

}
