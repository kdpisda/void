<?php

// This class control the uri segments of the app

class Void_URI {
    
    private $tokens = array();
    
    // Simply for returning controllerName to the base classes.
    public $controllerName;
    
    // Simply for returning method called from URI.
    public $methodName;
    
    // For setting any new parameters with the methods.
    public $parameters;
    
    public function __construct(){
        $this->get_uri();
        $this->route = new Router($this->controllerName, $this->methodName, $this->parameters);
    }
    
    public function get_uri(){
        
        // Instantiate the controller class and call its action method
        if(isset($_SERVER['PATH_INFO']) && $_SERVER['PATH_INFO'] != null){
            
            $this->tokens = explode('/',rtrim($_SERVER['PATH_INFO']));
        
            if(isset($this->tokens[1]) && $this->tokens[1] != null){
            
                // Initilising the controller name
                $this->controllerName = ucfirst($this->tokens[1]);
                
                if(isset($this->tokens[2]) && $this->tokens[2] != null){
                        
                    // Initilising method name
                    $this->methodName = $this->tokens[2];
                    if(isset($this->tokens[3]) && $this->tokens[3] != null){
                        
                        // Setting the parameter
                        $this->parameters = $this->tokens[3];
                    }
                    
                }
            }
        }
        
        // Making Welcome controller default
        else {
            // Load routing file
            require_once CONFIG_PATH . "routes.php";
            $this->controllerName = $route['default'];
        }
    }
}