<?php
abstract class bass{
    protected $name;
    abstract function cale($a,$b);
}

class drive extends bass{
    public function cale($a,$b){
        echo $a+$b;
    }
}

$test = new drive();
$test->cale(5,3);









?>