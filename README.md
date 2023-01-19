# PHP-OOP-Learning
OOP stands for Object-Oriented Programming.  Procedural programming is about writing procedures or functions that perform operations on the data, while object-oriented programming is about creating objects that contain both data and functions.  Object-oriented programming has several advantages over procedural programming:
## OPP Class  Overview
<details>
<summary> Click Here </summary>

1. How to create class
```php
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
       

```

</details>