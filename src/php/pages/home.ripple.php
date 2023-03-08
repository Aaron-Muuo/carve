<?php

use app\framework\core\Data;
use app\framework\core\View;
use app\components\theme\Theme;
use app\components\widgets\Card;
use app\components\widgets\Section;
use app\components\layouts\LinearLayout;

class IndexView extends View{

   function Create(Data $data)
   {

        // extends layout
        $this->extends('parent');

        return new Section([
            'child'=> new Card([
                'background'=>Theme::$BG_DARK,
                'corners'=>'6px',
                'shadow'=>true,
                'child'=>new LinearLayout([

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