<?php

class Cart {

    public $id;
    static private $cart;
    const BAD = 'klasine';

    static public function create() {
        return self::$cart ?? self::$cart = new self;
    }

    private function __construct() {
        $this->id = rand(1000, 9999);
    }

    // private function __clone() { }
     private function __sleep() { 
        return [];
    }
    private function __wakeup() { }
}