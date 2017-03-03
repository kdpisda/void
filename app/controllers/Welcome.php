<?php
    /* Void 0.1
    *  Author:: Kuldeep Pisda
    */

class Welcome extends Void{
    
    public function __construct(){
        $this->load = new Loader;
    }
    
    public function index(){
        $this->load->view('welcome_message');
    }
}