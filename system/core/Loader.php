<?php
    /*
    Void 0.1
    Author:: Kuldeep Pisda
    */

class Loader{

    // Load library classes

    public function __construct(){
        
    }
    
    public function load($script){

        // include LIB_PATH . "$lib.php";
        require($script);
    }


    // loader helper functions. Naming conventions helperName.php

    public function helper($helper){

        include HELPER_PATH . "$helper.php";

    }
    
    // loader view functions. Naming conventions viewName.php
    
    public function view($view){

        include VIEW_PATH . $view;

    }

}