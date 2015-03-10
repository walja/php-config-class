<?php
/**
 * php-config-class
 *
 * @author walja
 */
class config {
    
    protected static $config = array();
    
    private function __construct(){
    }
    
    private function __desctruct(){
    }
    
    public static function set($k, $v){
        self::$config[$k] = $v;
    }
    
    public static function get($k){
        return self::$config[$k];
    }
    
    public static function init($a){
        self::$config = $a;
    }
    
    public static function merge($a){
        self::$config = array_merge(self::$config, $a);
    }
    
}