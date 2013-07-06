<?php

use Prototype\TerrainFactory;
use Prototype\EarthSea;
use Prototype\EarthPlains;
use Prototype\EarthForest;

ini_set("display_errors",true);
error_reporting(E_ALL);

require 'vendor/autoload.php';

$terrain = new TerrainFactory(new EarthSea(), new EarthPlains(), new EarthForest());

var_dump($terrain->getSea());
var_dump($terrain->getPlains());
var_dump($terrain->getForest());


