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
        var_dump($this->tokens);
        
    }
    
    public function get_uri(){
        
        // Instantiate the controller class and call its action method
        if(isset($_SERVER['PATH_INFO'])){
            
            $this->tokens = explode('/',rtrim($_SERVER['PATH_INFO']));
        
            if($this->tokens != null){
            
                // Initilising the controller name
                $this->controllerName = ucfirst($this->tokens[1]);
                
                if(isset($this->tokens[2])){
                    
                    if($this->tokens[2] != null)
                        
                        // Initilising method name
                        $this->methodName = $this->tokens[2];
                    
                }
                if(isset($this->tokens[3])){
                    
                    if($this->tokens[3] != null)
                        
                        // Setting the parameter
                        $this->parameters = $this->tokens[3];
                }
            }
            // Making Welcome controller default
            else $this->controllerName = 'Welcome';
        }
    }
}