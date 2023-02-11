<?php

    /*
    |--------------------------------------------------------------------------
    | Error handler
    |--------------------------------------------------------------------------
    |
    | User defined error handler
    |
    */

    function customErrorHandler($errno, $errstr, $errfile, $errline) {
        
        $lines_array = file($errfile);
        $line = $lines_array[$errline - 1];
        $error_snippet = '';

        $index = $errline;
        $counter = 1;
        $top_lines_array = array();

        while($index-1 >=0 && $counter < 5){

            $error_snippet = "<span>".($errline-$counter).". ".$lines_array[$errline - ($counter+1)]."</span><br/>";
            array_push($top_lines_array, $error_snippet);
            
            $counter++;
        }

        $top_lines_array = array_reverse($top_lines_array);
        $error_snippet = '';

        for($i=0;$i<sizeof($top_lines_array); $i++){
            $error_snippet .= $top_lines_array[$i];
        }

        $error_snippet .= "
               
                <span class='error-line' style='background:#d32f2f;width:100%;display:block;cursor:pointer;'>".$errline.". ".$lines_array[$errline - 1]."</span>
            
            ";

        $index = $errline;
        $counter = 1;
        $line_no = 0;

        while($index-1 >=0 && $counter < 5){
            $error_snippet .= "

                <span>".($errline+$counter).". ".$lines_array[$errline + $line_no]."</span><br/>
    
            ";
            $counter++;
            $line_no++;
        }


        $debug_page = file_get_contents( __DIR__.'/../app/debug/debug.html');
        $debug_page = str_replace('{{error}}', "<b>Custom error:</b> [$errno] $errstr<br>", $debug_page);
        $debug_page = str_replace('{{description}}', "Error on line <b>$errline</b> in <u>$errfile</u><br/><br/> $error_snippet", $debug_page);
        echo $debug_page;
    }

    // Set user-defined error handler function
    set_error_handler("customErrorHandler");

    // Restore previous error handler
    // restore_error_handler();

?>
