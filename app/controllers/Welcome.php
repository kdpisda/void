<?php
    /* Void 0.1
    *  Author:: Kuldeep Pisda
    */

class Welcome extends Void{
    public function __construct(){
        // echo "Hello World from Welcome Controller";
        
    }
    
    public function index(){
        //echo "\nHello All I am Index method of Welcome controller";
        $this->load->view('welcome_message');
    }
}