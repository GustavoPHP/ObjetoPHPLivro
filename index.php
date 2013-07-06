<?php

ini_set("display_errors",true);

$loader = require 'vendor/autoload.php';

$comm = new \Factory\Pattern\BloggsCommsManager();
$mega = $comm->getApptEncoder();

echo $comm->getHeaderText();
echo "<br/>";
echo $mega->encode();
echo "<br/>";
echo $comm->getFooterText();

