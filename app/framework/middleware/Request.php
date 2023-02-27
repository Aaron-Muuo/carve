<?php

namespace app\framework\middleware;

class Request{

    /*
    |--------------------------------------------------------------------------
    | Request capture and processing
    |--------------------------------------------------------------------------
    |
    | Grab all request information from the user, which will be used by the application
    |
    */

    public static function capture()
    {

        $headers = getallheaders();
        $request_url = $_SERVER['REQUEST_URI'];
        $request_method = $_SERVER['REQUEST_METHOD'];
        $request_params = explode("/", substr(@$_SERVER['PATH_INFO'], 1));


        return array(
            "request_headers"=>$headers,
            "request_url"=>$request_url,
            "request_method"=>$request_method,
            "request_params"=>$request_params,
        );
    }

    public static function process()
    {

        // $method = $_SERVER['REQUEST_METHOD'];
        // $request = explode("/", substr(@$_SERVER['PATH_INFO'], 1));

        // switch ($method) {
        // case 'PUT':
        //     do_something_with_put($request);  
        //     break;
        // case 'POST':
        //     do_something_with_post($request);  
        //     break;
        // case 'GET':
        //     do_something_with_get($request);  
        //     break;
        // default:
        //     handle_error($request);  
        //     break;
    

        // }

    }
}

?>
