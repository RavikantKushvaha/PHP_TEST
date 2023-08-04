<?php
    abstract class ParentClass{
            public $name;
            abstract protected function calc($a,$b);
    }
    class ChildClass extends ParentClass{
        public function calc($a,$b){
                return $a+$b;
               // echo "Hello";
        }
    }
    $test1 = new ChildClass();
    echo $test1->calc(10,20);
?>