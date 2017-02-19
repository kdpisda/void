<?php

// Router Class which will route the application
class Router{
    
    private $controller;
    private $method;
    private $parameters;
    
    public function __constructor($controller = null, $method = null, $parameters = null){
        
        if($controller != null){
            require CONTROLLER_PATH.$controller.'.php';
            $this->_Load_Controller($controller);
            if($method != null){
                $this->_Init_Method($method);
                if($parameters != null){
                    $this->_Init_Param($parameters);
                }
            }
        }
    }
    
    // Load controller
    public function _Load_Controller ($controller){
        $this->controller = new $controller;
    }
    
    public function _Init_Method ($method){
        $this->controller.$method();
    }
    
    public function _Init_Param ($parameters){
        $this->controller.$method($parameters);
    }
}