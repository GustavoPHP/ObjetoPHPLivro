<?php

namespace Factory\Pattern;

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
    
}

?>
