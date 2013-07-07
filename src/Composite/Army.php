<?php

namespace Composite;

class Army extends CompositeUnit {

    private $units = array();
    
    function addUnit(Unit $unit){
        if(in_array($unit, $this->units, true)){
            return;
        }
        $this->units[] = $unit;
    }
    
    function removeUnit(Unit $unit){
        $units = array();
        foreach($this->units as $thisunit){
            if($unit !== $thisunit){
                $units[] = $thisunit;
                continue;
            }
        }
        $this->units = $units;
    }
    
    function bombardStrength(){
        $ret = 0;
        foreach($this->units as $unit){
            $ret += $unit->bombardStrength();
        }
        return $ret;
    }
    
}
