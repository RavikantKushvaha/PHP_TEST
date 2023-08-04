<?php
    trait hello{
        public function sayhello(){
            echo "hello everyone";
        }
    }
    class base1{
        use hello;
    }
    class base2{
        use hello;
    }
    $test1 = new base1();
    $test2 = new base2();
    $test1->sayhello();
    $test2->sayhello();
?>