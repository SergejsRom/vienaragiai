<?php
// Daro Antanas
class Bebras {

    public $tail = 'Long';
    private $age = 23;
    private $name, $childrens;

    public function __construct(string $n, array $c) {
        echo '<br> magic construct <br>';
        $this->whatIsYourAge();
        $this->age = rand(10, 200);
        $this->whatIsYourAge();
        $this->name = $n;
        $this->childrens = $c;
    }

    public function __destruct() {
        echo '<br> magic visi mire <br>';
    }

    public function whatIsYourAge() { // getter
        // echo '<br>'.(++$this->age).'<br>';
    }

    public function changeAge(array $age) { // setter
        if ($age[0] > 25) {
            return;
        }
        $this->age = $age[0];
    }

    public function __get($what) {
        if (in_array($what, ['age', 'name'])) {
            return 'Antanukas';
        }
        return 'NONE';
        // echo '<br>magic GET '.$what.'<br>';
        // return 'Nieko nera namie';
        
    }

    public function __set($where, $what) {
        echo '<br>magic SET '.$where.' '.$what.'<br>';

    }



}