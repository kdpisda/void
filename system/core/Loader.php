<?php
    /*
    Void 0.1
    Author:: Kuldeep Pisda
    */

class Loader{

    public function _construct(){
        require_once CONFIG_PATH . "routes.php";
    }
    
    // Load library classes
    
    public function auto_load($lib){

        // include LIB_PATH . "$lib.php";
        require_once("$lib.php");
    }


    // loader helper functions. Naming conventions helperName.php

    public function helper($helper){

        include HELPER_PATH . "$helper.php";

    }
    
    // loader view functions. Naming conventions viewName.php
    
    public function view($view){

        include VIEW_PATH . "$view.php";

    }
    
    // loader controller functions. Naming conventions controllerName.php
    public function controller($controller){
        include CONTROLLER_PATH . "$controller.php";
    }

}