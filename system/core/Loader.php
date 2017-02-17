<?php
    /*
    Void 0.1
    Author:: Kuldeep Pisda
    */

class Loader{

    // Load library classes

    public function __construct(){
        echo "Loader->";
        $tokens = explode('/',rtrim($_SERVER['PATH_INFO']));
        $controllerName = ucfirst($tokens[1]);
        require_once CONTROLLER_PATH.$controllerName.'.php';
        $controller = new $controllerName;
    }
    
    public function render($script){

        // include LIB_PATH . "$lib.php";
        require($script);
    }


    // loader helper functions. Naming conversion is xxx_helper.php;

    public function helper($helper){

        include HELPER_PATH . "{$helper}_helper.php";

    }

}