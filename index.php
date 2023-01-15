<?php

class Calculation //class
{
    public $a, $b,$c;  //properties

    function sum($a,$b){  //methods
        $this->c= $a+$b;
        return $this->c;
    }
    function sub(){  //methods
        $this->c= $this->a-$this->b;
        return $this->c;
    }

    function info($fname,$lname){
        return "Name:".$fname."$lname";
    }
}

$info =new Calculation;
echo $info->info('nur','naby')."<br>";
echo $info->info('shoag','naby');


// $c1 = new Calculation;
// echo $c1->sum(20,10);
// echo $c1->sum(60,10);
// // $c1 = new Calculation;




// $c1->a=40;
// $c1->b=10;
// $c2 =new Calculation;
// $c2->a=100;
// $c2->b=50;




// echo "sum value of c1:".$c1->sub()."<br>";
// echo "sub value of c1:".$c2->sum()."\n";