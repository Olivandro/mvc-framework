<?php

namespace Core;

class Autoloader {

    // /**
    //  * Declare class constant varibles
    //  */
    protected $_PATH; 
    protected $_CORE;
    

    /**
     * Constructor method.
     * More to come...
     */
    public function __construct()
    {

        $this->corePath = __DIR__ . '/System';
        
        spl_autoload_register(array($this,'load'));

    }

    public function load()
    {
        $_PATH = __DIR__ . '/System';
        $_CORE = glob($_PATH . '/*.php');
        if ($_CORE) 
        {
            foreach ($_CORE as $path) 
            {
                // set_include_path($this->corePath);
                // spl_autoload_extensions('.php');
                // spl_autoload($path);
                // printf($path);
                /**
                 * Must find better way of implementing all desired classes.
                 * Currently this will work for the time being, however
                 * I can see this wy of doing things causing problems later on.
                 */
                require_once $path;
                // spl_autoload_register($path);
            }    
        }  
    }


}
