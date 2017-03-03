<?php

// Router Class which will route the application
class Router{
    
    public function __construct($controller = null, $method = null, $parameters = null){
        $this->load = new loader;
        if(isset($controller) && $controller != null){
            
            $this->load->controller($controller);
            $this->_Load_Controller($controller);
            
            if(isset($method) && $method != null){
                
                $this->_Init_Method($method);
                
                if(isset($parameters) && $parameters != null){
                    $this->_Init_Param($parameters);
                }
            }
            else {
                $this->_Init_Method('index');
            }
        }
        else $this->load->view('error/error');
    }
    
    // Load controller
    public function _Load_Controller ($controller){
        $this->controller = new $controller;
    }
    
    public function _Init_Method ($method){
        $this->controller->$method();
    }
    
    public function _Init_Param ($parameters){
        $this->controller->$method($parameters);
    }
}