<?php

namespace src\php\controllers;

use IndexPage;

class HomeController{

    public static function index(){

        IndexPage::render([]);

        echo "Hello world";

    }

}

?>