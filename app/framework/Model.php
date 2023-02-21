
<?php

namespace app\framework;

class Model{

    /*
    |--------------------------------------------------------------------------
    | Base model
    |--------------------------------------------------------------------------
    |
    | 
    |
    */

    protected $table = '';

    protected static function get()
    {
        return true;
    }
    protected static function all()
    {
        return new Model();
    }
    protected static function where()
    {
        return new Model();
    }
    protected static function count()
    {
        return new Model();
    }
    protected static function find()
    {
        return new Model();
    }
    protected static function delete()
    {
        return new Model();
    }
    protected static function save()
    {
        return new Model();
    }
}

?>

