<?php

/**
 * Autoloader require the right  model or class
 */
class Autoloader{
        
    /**
     * register
     * call the function autoload to charge the right class or model
     * @return void
     */
    static function register(){
        spl_autoload_register(array(__CLASS__,'autoload'));
    }    
    /**
     * autoload
     * require the right class or model
     * @return void
     */
    static function autoload(){
        require_once('models/'.$class.'.php');
    }
}