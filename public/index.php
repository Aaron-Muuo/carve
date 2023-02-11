<?php

use app\framework\Request;
use app\framework\Application;

// Entry point of the web application


/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| For autoloading classes within the application
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Initialize and run
|--------------------------------------------------------------------------
|
| Initialize the application,foward the request to the appropiate handler
| then send back response to the user
|
*/

$app = Application::init(
    Request::capture()
);

$app->close();

?>