<?php
namespace app\framework\core;

class ErrorCodes
{

    public $codes = [
        '100'=>array(
            'Controller file not found',
            'The requested controller could not be found, it possible that the controller was not created or there is a problem in the naming. Cross check to ensure what url is correct, or the requested controller exists in the src/php/controllers/ directory'
        ),
        '101'=>array(
            'Invalid URL',
            'The URL could not be validated, either because it contains invalid strings or is too long to be processed'
        ),
        '102'=>array(
            'Class not found',
            'The controller class could not be found. Ensure fila name matches controller name'
        ),
        '103'=>array(
            'Method not found',
            'The requested method cannot be found in controller class'
        ),
        '104'=>array(
            'No action defined for /',
            'No action has been defined for /. Default is index for both controller and method'
        ),
        '105'=>array(
            'Argument error',
            'Few arguments passed for the method'
        ),
    ];

}

?>
