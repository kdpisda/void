<?php
    /*
    Void 0.1
    Author:: Kuldeep Pisda
    */

class Loader{

    // Load library classes

    public function __construct(){
        echo "Loader->";
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