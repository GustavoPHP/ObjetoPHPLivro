<?php

ini_set("display_errors",true);
error_reporting(E_ALL);

require 'vendor/autoload.php';


$comm = new AbstractFactory\BloggsCommsManager();
$appt = $comm->make(1);
$ttd = $comm->make(2);
$contact = $comm->make(3);

echo $comm->getHeaderText();
echo "<br/>";
echo $appt->encode();
echo "<br/>";
echo $ttd->encode();
echo "<br/>";
echo $contact->encode();
echo "<br/>";
echo $comm->getFooterText();

