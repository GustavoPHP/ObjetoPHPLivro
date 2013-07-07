<?php

namespace Composite;

/**
 * Description of CompositeUnit
 *
 * @author gustavo
 */
abstract class CompositeUnit extends Unit{
    
    private $units = array();
    
    function getComposite() {
        return $this;
    }
    
    protected function units(){
        return $this->units;
    }
    
    function removeUnit(Unit $unit){
        $units = array();
        
        foreach($this->units as $thisunits){
            if($unit !== $thisunits){
                $units[] = $this->units;
                continue;
            }
        }
        $this->units = $units;
    }
    
    
    function addUnit(Unit $unit){
        if(in_array($unit, $this->units, true)){
            return;
        }
        $this->units[] = $unit;
    }
    
}
