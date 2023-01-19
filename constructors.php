<?php

class person{
    public $name;
    public $age;

    function __construct($name='sohag',$age=23){
       $this->name=$name;
       $this->age=$age;
    }
    function show(){
        echo $this->name."-".$this->age;
    }
}

$p =new person();
// $p->name="nur";
// $p->age=23;
$p->show();



?>