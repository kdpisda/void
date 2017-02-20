<?php
    /*
    Void 0.1
    Author:: Kuldeep Pisda
    */

// Base Controller

require_once('Kernel.php');
class Void extends Kernel {
    
    protected $load;
    public function __construct(){
        $this->kernel = new Kernel;
        $this->load = new loader;
    }

}