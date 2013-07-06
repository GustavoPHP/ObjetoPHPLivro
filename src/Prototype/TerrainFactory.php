<?php

namespace Prototype;
/**
 * Description of TerrainFactory
 *
 * @author gustavo
 */
class TerrainFactory {
    
    private $sea;
    private $forest;
    private $plains;
    
    function __construct(Sea $sea, Plains $plains, Forest $forest){
        $this->sea = $sea;
        $this->plains = $plains;
        $this->forest = $forest;
    }
    
    public function getSea() {
        return clone $this->sea;
    }

    public function getForest() {
        return clone $this->forest;
    }

    public function getPlains() {
        return clone $this->plains;
    }
    
}
