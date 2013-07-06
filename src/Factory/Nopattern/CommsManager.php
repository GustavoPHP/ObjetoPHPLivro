<?php

namespace Factory\Nopattern;


class CommsManager {
    
    const BLOGGS = 1;
    const MEGA = 2;
    
    private $mode = 1;
    
    public function __construct($mode) {
        if(!is_int($mode)){
            throw new Exception("The Params of class CommsManager should be integer ", 1);
        }
        $this->mode = $mode;
        return $this;
    }
    
    function getHeaderText(){
        
        switch ($this->mode):
            case (self::MEGA):
                return "MegaCal header \n";
            break;
            
            default:
                return "BloggsCal header \n";
            break;
        endswitch;
        
    }
    
    function getApptEncoder(){
        switch ($this->mode){   
            case (self::MEGA):
                return new MegaApptEncoder();
            break;
            
            default: 
                return new BloggsApptEncode();
        }
    }
    
}