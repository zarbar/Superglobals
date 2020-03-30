<?php

 spl_autoload_register(function($class){
   // standard php library  
     $filename = $class.'php';
     
     if (!file_exists($filename)){
         
        return false;
     }
     
     include $filename;
     
 });
 

?>



    
   