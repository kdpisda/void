<?php

class Void {
    
    protected $load = null;
    
    public function _construct(){
        $this->load = new Loader;
    }
}