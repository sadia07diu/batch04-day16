<?php


namespace App\classes;



class person
{
    public $district="Savar";
    protected $division="Dhaka";
    private $country="Bangladesh";

    public function district (){
        echo "KawranBazar<br/>";
    }
    protected function division(){
        echo "Dhaka<br/>";
    }


}