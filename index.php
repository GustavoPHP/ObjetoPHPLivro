<?php

use Composite\Army,
    Composite\Archer,
    Composite\LaserCannonUnit;

ini_set("display_errors",true);
error_reporting(E_ALL);

require 'vendor/autoload.php';

$main_army = new Army();

$main_army->AddUnit(new Archer());
$main_army->AddUnit(new LaserCannonUnit());


$sub_army = new Army();

$sub_army->addUnit(new Archer());
$sub_army->addUnit(new Archer());
$sub_army->addUnit(new Archer());
$sub_army->addUnit(new Archer());

$main_army->addUnit($sub_army);

print "Attacking with strengtg: {$main_army->bombardStrength()}";


