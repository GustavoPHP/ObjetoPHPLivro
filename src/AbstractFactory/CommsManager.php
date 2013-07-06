<?php

namespace AbstractFactory;

abstract class CommsManager {
    
    const APPT = 1;
    const TDD = 2;
    const CONTACT = 3;
    
    abstract function getHeaderText();
    abstract function make($flag_int);
    abstract function getFooterText();
    
}