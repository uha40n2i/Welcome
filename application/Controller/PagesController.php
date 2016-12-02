<?php

namespace Mini\Controller;

use Mini\Libs\PHPExcel;
use Mini\Libs\PHPExcel_IOFactory;

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
