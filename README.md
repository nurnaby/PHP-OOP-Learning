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

## OPP Constructors  Overview
<details>
<summary> Click Here </summary>

1. How to Create Constructors function
- Note:Constructors are special member functions for initial settings of newly created object instances from a class, which is the key part of the object-oriented concept in PHP5.
```php

function __construct()
       {
       // initialize the object and its properties by assigning 
       //values
       }

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



```

</details>

## OPP Interitance  Overview
<details>
<summary> Click Here </summary>

1. How to Create Inheritance function
- In inheritance, you have a parent class with properties and methods, and a child class can use the code from the parent class.
```php



```
</details>



## OPP Interitance  Overview
<details>
<summary> Click Here </summary>

1. How to Create Inheritance function
- In inheritance, you have a parent class with properties and methods, and a child class can use the code from the parent class.
```php

```
</details>

## OPP Abstract Class  Overview
<details>
<summary> Click Here </summary>

1. An abstract class is a class that cannot be instantiated. Typically, an abstract defines an interface for other classes to extend.

To define an abstract class, you add the abstract keyword as follows:

```php
<?php

abstract class className
{
   // ...
}
```
</details>