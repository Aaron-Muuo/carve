<?php

namespace app\framework\core;

use app\framework\middleware\Middleware;
use Exception;

class Application{

    //will pass this to the middleware for processing
    private static $request_url;
    private static $request_method;
    private static $request_params;

    public static function init($request){

        // print "<pre>";
        // print_r($request);
        // print "</pre>";exit;

        self::$request_url = $request['request_url'];//complete request path including query parameters
        self::$request_method = $request['request_method'];
        self::$request_params = $request['request_params'];//list of controller [0], method [1] and optional parameters ..[2]


        try{
        
            //call middleware to forward the request to controller with params, inject request body
            //then echo the output from the controller back to user, this case a rendered page
            //then return a new instance of the application

            $middleware = new Middleware();
            $middleware->process(self::$request_url, self::$request_method, self::$request_params);

            return new Application();
            
        

            // throw new Exception("Value must be 1 or below");
                
           
        }catch(Exception $e){
        
            require 'ErrorHandler.php';
        
            trigger_error($e->getMessage());
            return new Application();
        
        }

    }

    public function close(){

        //close connection
        //do final cleanup

        return "Application closed.";
    }


}

?>