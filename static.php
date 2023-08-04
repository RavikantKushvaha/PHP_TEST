<?php
    class base{
        public static $name="Ravikant";
        public static function show(){
            echo self::$name;
        }
        public function __construct($n){
            self::$name=$n;
        }
    }
    $test = new base("Ravi");
    $test->show();

    // echo base::$name;
    // base::show();
?>