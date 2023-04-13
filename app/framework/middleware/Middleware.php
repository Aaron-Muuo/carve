<?php

namespace app\framework\middleware;

use app\framework\core\Security;
use Exception;

class Middleware{

    public function process($request_url, $request_method, $request_params){

        $document_path = $_SERVER['DOCUMENT_ROOT'];
        $document_path = trim($document_path, '\public');

        //validate request_url to make sure it is secure
        //check request method to ensure the controller/action allows the request method
        //call controller, method and add the parameters to an object which should be injected in the action being called

        if(Security::validate($request_url)){

            //default controller and method
            $controller = "IndexController";
            $method = "index";
           

            if(isset($request_params[0])){

                if($request_params[0] != ""){
                    $controller = ucfirst($request_params[0]).'Controller'; //capitalize first letter and add keyword controller
                }
               
            }
            if(isset($request_params[1])){

                if($request_params[1] != ""){
                    $method = $request_params[1];
                }
               
            }

            //remove controller and method from the array
            $request_params = array_splice($request_params, 2);

            if($request_params == []){
                $request_params = [null];
            }

            if(file_exists($document_path.'\src\php\controllers\\'.$controller.'.php')){

                $class_path = '\src\php\controllers\\'.$controller;
                $class_instance = "";

                if(class_exists($class_path, true)){

                    $class_instance = new $class_path();

                }else{
                
                    throw new Exception("102");

                }

                if(method_exists($class_instance, $method)){

                    // TODO:Catch argument error 105 - no error so far, returns null
                    call_user_func_array(array($class_instance, $method), $request_params);

                    

                }else{

                    throw new Exception("103");
                }

              
            }else{


                throw new Exception("104");
            }
           

        }else{

            throw new Exception("101");
        }


    }


}
?>