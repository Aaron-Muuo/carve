<?php

namespace app\framework;

use Exception;

class Application{

    private static $start_time;
    private $finish_time;

    public static function init($request){

        // self::$start_time = time();

        try{
    
            //if call_some_function_that_returns_a_value
            if(true) {

                //call kernel to foward the request to controller with params, inject request body
                //then echo the output from the controller back to user, this case a rendered page
                //then return a new instance of the application
                
                return "Application booted successfully";

                return new Application();
                
              }else{

                throw new Exception("Value must be 1 or below");
                
              }
        
        }catch(Exception $e){
        
            require __DIR__.'/../app/framework/ErrorHandler.php';
        
            trigger_error($e->getMessage());
            return new Application();
        
        }

    }

    public function close(){

        //close connection
        // $this->finish_time = time();

        return "Application closed.";
    }


}

?>