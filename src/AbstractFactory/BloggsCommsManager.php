<?php

namespace AbstractFactory;

class BloggsCommsManager extends CommsManager{
    
    function getHeaderText(){
        return "BloggsCal header";
    }
    
    function getFooterText(){
        return "BloggsCal Footer";
    }
    
    function make($flag_int){
        if(!is_int($flag_int)){
            throw new Exception("O pametro da função Make deve ser um inteiro");
        }
        switch($flag_int):
            case self::APPT : 
                return new BloggsApptEncoder();
            break;
            
            case self::CONTACT :
                return new BloggsContactEncoder();
            break;
            
            case self::TDD :
                return new BloggsTtdEncoder();
            break;
            
        endswitch;
    }
    
}
