<?php

namespace app\components\widgets;

class Container{
    
    private function template($content){
       
        return `
        <div class="container">
            <!-- Content here -->
            @render($content)
        </div>
      `;
    }
}

?>