<?php
    trait hello{
        public function sayhello(){
            echo "Hello traits ";
        }
    }
    class base{
        public function sayhello(){
            echo "hello base class";
        }
    }
    class derived extends base{
        use hello;
        public function sayhello(){
            echo " hello derrived class";
        }
    }
    $test = new derived();
    $test->sayhello();

?>