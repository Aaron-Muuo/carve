<?php

use app\framework\middleware\Request;
use app\framework\core\Application;

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
| Initialize the application,forward the request to the appropriate handler
| then send back response to the user
|
*/

$app = Application::init(
    Request::capture()
);

$app->close();

?>