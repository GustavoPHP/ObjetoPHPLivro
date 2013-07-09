<?php

use Decorator\Tile,
        Decorator\Plains;

ini_set("display_errors",true);
error_reporting(E_ALL);

require 'vendor/autoload.php';

$tile = new Decorator\DiamondDecorator(new Plains());
var_dump($tile->getWealthFactor());

