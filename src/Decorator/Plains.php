<?php

namespace Decorator;

class Plains extends Tile{
    
    private $wealthfactor = 2;
    
    function getWealthFactor(){
        return $this->wealthfactor;
    }
    
}
