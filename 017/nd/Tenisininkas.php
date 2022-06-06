<?php

class Tenisininkas {
    private $vardas;
    private $kamuoliukas;
    private static $zaidejas1;
    private static $zaidejas2;

    public static function zaidimoPradzia() {
        if (null === self::$zaidejas1 || null === self::$zaidejas2) {
            echo '<h1>Negalima</h1>';
        }
        self::$zaidejas1->kamuoliukas = (bool) rand(0, 1);
        self::$zaidejas2->kamuoliukas = !self::$zaidejas1->kamuoliukas;
    }

    public function __construct($name) {
        $this->name = $name;
        if (null === self::$zaidejas1) {
            self::$zaidejas1 = $this;
        }
        elseif (null === self::$zaidejas2) {
            self::$zaidejas2 = $this;
        }
    }

    public function arTuriKamuoliuka() {
        return $this->kamuoliukas;
    }

    public function perduotiKamuoliuka() {
        if (!$this->arTuriKamuoliuka()) {
            echo '<h1>'.$this->name.' neturi kamuoliuko</h1>';
        }
        else {
            if (self::$zaidejas1->arTuriKamuoliuka()) {
                self::$zaidejas2->kamuoliukas = true;
                $this->kamuoliukas = false;
                echo '<h1>Perduotas</h1>';
            } 
            else {
                self::$zaidejas1->kamuoliukas = true;
                $this->kamuoliukas = false;
                echo '<h1>Perduotas</h1>';
            }
        }
    }

    
}