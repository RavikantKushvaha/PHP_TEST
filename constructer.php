<?php
    class person{
        public $name,$age;

        function __construct($nam="No name",$ag="0")
        {
            $this->name= $nam;
            $this->age= $ag;
        }
        function show()
        {
            echo $this->name . "-" . $this->age . "<br>";
        }
    }
    $p1 = new person();
    $p2 = new person("Ravikant",23);
    $p1->show();
    $p2->show();
?>