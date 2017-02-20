<?php
    /*
    Void 0.1
    Author:: Kuldeep Pisda
    */

// system/core/Kernel.php


class Kernel {

    public function __construct(){
        self::init();
        //self::autoload();
        //self::dispatch();
        $this->uri = new Void_URI();
    }
    
    // Initialization of the application

    private static function init() {

        // Define path constants
        define("DS", DIRECTORY_SEPARATOR);
        define("ROOT", getcwd() . DS);
        define("APP_PATH", ROOT . 'app' . DS);
        define("FRAMEWORK_PATH", ROOT . "system" . DS);
        define("PUBLIC_PATH", ROOT . "assets" . DS);
        define("CONFIG_PATH", APP_PATH . "config" . DS);
        define("CONTROLLER_PATH", APP_PATH . "controllers" . DS);
        define("MODEL_PATH", APP_PATH . "models" . DS);
        define("VIEW_PATH", APP_PATH . "views" . DS);
        define("CORE_PATH", FRAMEWORK_PATH . "core" . DS);
        define('DB_PATH', FRAMEWORK_PATH . "database" . DS);
        define("LIB_PATH", FRAMEWORK_PATH . "libraries" . DS);
        define("HELPER_PATH", FRAMEWORK_PATH . "helpers" . DS);
        define("UPLOAD_PATH", PUBLIC_PATH . "uploads" . DS);
        
        // Load core classes
        require CORE_PATH . "Void.php";
        require CORE_PATH . "Loader.php";
        require CORE_PATH . "Router.php";
        require CORE_PATH . "URI.php";
        require DB_PATH . "DB.php";
        require CORE_PATH . "Model.php";

        // Load configuration file
        $GLOBALS['config'] = include CONFIG_PATH . "config.php";
        
        // Load routing file
        $GLOBALS['config'] = include CONFIG_PATH . "routes.php";
        
        // Start session
        session_start();
    }
    
    //Autoloading
    private static function autoload(){
        // spl_autoload_register(array(__class__,'load'));
        
    }
    
    //Defining a load method
    private static function load($class){
        
        //Autoloading controller and model class
        if(!file_exists(CURR_CONTROLLER_PATH."$class.php")){
            // Trying to get controller
            require_once CURR_CONTROLLER_PATH."$class.php";
            
        }else if(!file_exists(CURR_CONTROLLER_PATH."$class.php")){
            // Controller not found, loading model
            require_once  MODEL_PATH."$class.php";
        }

    }
    
    // Routing and dispatching
    private static function dispatch(){
        
    }
}