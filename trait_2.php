<?php
    trait hello{
        public function sayhello(){
            echo "Hello traits ";
        }
    }
    trait hi{
        public function sayhello(){
            echo "Hii taits";
        }
    }
    class base{
        use hello,hi{
            hello::sayhello insteadOf hi;
            hi::sayhello as newhello;
        }
    }
    $test = new base();
    $test->sayhello();
    $test->newhello();

?>