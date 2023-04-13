<?php


namespace app\framework\core;

class View{

    protected static $parent = NULL;

    function __construct()
    {
        return true;
    }

    public static function Create(array $data)
    {
        return true;
    }
    public function Scaffold()
    {
        return true;
    }
    protected function extends($parent_layout)
    {
        $this->parent = file_get_contents($parent_layout);
        return true;
    }
    public static function render(array $data=[])
    {
        $rendered_page = "";

        if(self::$parent == NULL){
            
            $rendered_page = self::Create($data);

        }else{
            $rendered_page = str_replace('{{content}}', self::Create($data), self::$parent);
        }
        
        
        return $rendered_page;
    }

}
?>