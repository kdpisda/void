<?php
    /* Void 0.1
    *  Author:: Kuldeep Pisda
    */

class Welcome extends void{
    public function __construct(){
        echo "Hello World from Welcome Controller";
        // $this->load;
    }
    
    public function index(){
        echo "\nHello All I am Index method of Welcome controller";
    }
}