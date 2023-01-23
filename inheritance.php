<?php
class empley{
    public $name,$age,$salary;
    function __construct($name,$age,$salary){
        $this->name=$name;
        $this->age=$age;
        $this->salary=$salary;
    }
    function empleyinfo(){
    echo"<h4>empley profilio</h4>";
    echo "Empley Name:".$this->name ."<br>";
    echo "Empley Age:".$this->age ."<br>";
    echo "Empley Salary:".$this->salary ."<br>";
    
     }

    
}

class manager extends empley{
    public $ta=100;
    public $phone=100;
    function info(){
        echo"<h4>Manager Info</h4>";
        echo "Empley Name:".$this->name ."<br>";
        echo "Empley Age:".$this->age ."<br>";
        echo "Empley Salary:".$this->salary ."<br>";
        echo "Empley ta:".$this->ta ."<br>";
        echo "Empley phone:".$this->phone ."<br>";
    }

}

// $s = new empley('sohag',23);

$a = new manager("nur",23,2000);

$a->info();
?>