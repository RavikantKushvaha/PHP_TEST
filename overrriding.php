<?php
    class Base{

        public $name="Base Class";
        function show($a,$b){
                return $a*$b;
        }
    }
    class Derive extends Base{
            public $name="Derive class";
            function show($a,$b){
                return $a+$b;
            }
    }
    $test= new Derive();
    echo $test->name . "<br>";
     echo $test->show(10,20);
?>