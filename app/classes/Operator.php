<?php


namespace App\classes;


class Operator
{
//    statement
//
//    single line
//    conditional
//        if
//        else
//            if else
//            switch
//    repeated statement
//      for
//      while
//      do while
//      for each
//      array


//    operator
//    arithmetic operator
//        binary operator(+,-,*,/,%)
//        unary operator(++,--,(-))
//    assignment operator(=,+=,-=,*=,/=,%=,.=)
//    conditional operator(>,<,>=,<=,==,!=,===,!==)
//    logical operator(&&,||,!)
//
    public $x ;
    public $y ;
    protected $z;

    public function index()
    {
        $this->x = 10;
        $this->y = 20;
        $this->z = 30;
        switch ($this->y){

            case 10:
                echo "hello world";
                break;
            case 20:
                echo "hello bitm";
                break;


            case 30:
                echo "hello basis";
                break;

            default:
                echo "hello world";
                break;

        }


        if($this->x > $this->y){
            echo "Hello bitm";
        }
        else if($this->y > $this->z){
            echo "hello Dhaka";
        }
        else if($this->z > $this->y){
            echo "hello basis";
        }
        else{
            echo "Bye";
        }



        echo ($this->x > $this->y) || ($this->y > $this->z);
        echo "<br/>";
        echo ($this->x > $this->y) || ($this->y < $this->z);
        echo "<br/>";
        echo ($this->x < $this->y) || ($this->y > $this->z);
        echo "<br/>";
        echo ($this->x < $this->y) || ($this->y < $this->z);
        echo "<br/>";





        echo $this->x += $this->y;
        echo "<br/>";
        echo $this->x -= $this->y;
        echo "<br/>";
        echo $this->x *= $this->y;
        echo "<br/>";
        echo $this->x /= $this->y;
        echo "<br/>";
        echo $this->x %= $this->y;
        echo "<br/>";
        echo $this->x .= $this->y;
        echo "<br/>";

//        echo $this->x++;
//        echo "<br/>";
//        echo $this->x--;
//        echo "<br/>";
//
//        echo $this->x + $this->y;
//        echo "<br/>";
//        echo $this->x - $this->y;
//        echo "<br/>";
//        echo $this->x * $this->y;
//        echo "<br/>";
//        echo $this->x / $this->y;
//        echo "<br/>";
//        echo $this->x % $this->y;
//        echo "<br/>";
    }

}