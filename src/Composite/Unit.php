<?php

namespace Composite;

abstract class Unit {
    abstract function bombardStrength();
    
    function getComposite(){
        return null;
    }
}
