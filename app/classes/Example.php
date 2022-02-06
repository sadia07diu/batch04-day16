<?php


namespace App\classes;
use App\classes\Person;


class Example extends Person
{
    public $firstName ="sadia";
    protected $middleName;
    private $lastName;
//    public $lastName="mumu";
    public $firstNumber=10;
    protected $secondNumber=20;
    private $lastNumber=30;


    public function index(){
//        echo $this->firstName;
//        echo "<br/>";
//        echo "hello world";


//        echo gettype($this->firstName);
//        echo "<br/>";
//        echo gettype($this->lastNumber);
//        echo "<br/>";
//        $this->firstName="samia";
//        $this->firstName="sam";
        $this->firstName="MD.";
        echo $this->firstName;



    }
    public function methodOne(){
        $this->middleName="Habibur";
        echo $this->middleName;
    }
    public function methodTwo(){
        $this->lastName="rahman";
        echo $this->lastName;
    }
    public function methodThree(){
//
//        echo $this->division;
        $this->district();
        $this->division();
        $this->country();

    }
    private function country(){
        echo "Bangladesh";
    }

}