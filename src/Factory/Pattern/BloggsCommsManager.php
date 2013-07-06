<?php

namespace Factory\Pattern;

class BloggsCommsManager extends CommsManager{
    
    function getHeaderText(){
        return "BloggsCal header";
    }
    
    function getApptEncoder(){
        return new BloggsApptEncode();
    }
    
    function getFooterText(){
        return "BloggsCal Footer";
    }
    
}

?>
