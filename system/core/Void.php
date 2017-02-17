<?php
    /*
    Void 0.1
    Author:: Kuldeep Pisda
    */

// Base Controller

require_once('Kernel.php');
class Void extends Kernel {
    
    public function __construct(){
        
    }
    
    public function redirect($url,$message,$wait = 0){

        if ($wait == 0){
            header("Location:$url");
        } else {
            include CURR_VIEW_PATH . "message.html";
        }
        exit;
    }

}