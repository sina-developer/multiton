<?php

class Multiton {
    private static $instances = [];
    private string $type;

    function __construct(string $type){
        $this->type = $type;
    }

    public static function getInstance(string $type){
        if(!isset(self::$instances[$type])){
            self::$instances[$type] = new Multiton($type);
        }
        return self::$instances[$type];
    }

    public function getType(){
        return "My Type is " . $this->type . "\n";
    }
}