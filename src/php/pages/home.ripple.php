<?php

use app\components\Card;
use app\components\Section;
use app\components\Theme;
use app\framework\Widget;

class Page extends Widget{

   function Build()
   {

        // extends layout
        $this->extends('parent');

        return new Section([
            
            'child'=> new Card([
                'background'=>Theme::$BG_DARK,
                'corners'=>'6px',
                'shadow'=>true,
                'child'=>new LinearView([

                ])
            ]
            )

        ]);
   }

   //user defined function
   function doSth(){

   }
}




?>