<?php
    /*
     *  Here is where the magic happens.
     *   This is the document main for that the system works correctly.
     */
    session_start();
    require_once './vendor/autoload.php';
    //Archive of configuration
    require './configRek.inc.php';
    
    //Auto loading
    spl_autoload_register(function($class){
        
        //Verify if exist the archive on folder "modules" 
        if(strpos($class, 'Controller') > -1) 
        {
            if(file_exists('controllers/'.$class.'.php'))
            {
                require_once 'controllers/'.$class.'.php';
            }
        }
        elseif(strpos($class, 'Helper') > -1) 
        {
            if(file_exists('helpers/'.$class.'.class.php'))
            {
                require_once 'helpers/'.$class.'.class.php';
            }
        }
        elseif(file_exists('modules/'.$class.'/'.$class.'.php'))
        {
            require_once 'modules/'.$class.'/'.$class.'.php';
        }
        
    });
    
    //Start
    Core::getInstance()->run($config);
    
?>