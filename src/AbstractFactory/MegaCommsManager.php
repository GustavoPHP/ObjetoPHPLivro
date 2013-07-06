<?php

namespace AbstractFactory;

class MegaCommsManager extends CommsManager{
    
    
    public function getApptEncoder() {
        return new MegaApptEncoder();
    }

    public function getFooterText() {
        return "Footer of ". __CLASS__;
    }

    public function getHeaderText() {
        return "Header of ". __CLASS__;
    }

    public function getContactEncoder() {
        
    }

    public function getTtdEncoder() {
        
    }    
    
}

?>
