<?php
    trait hello{
        private function sayhello(){
                echo "Hello Traits";
        }
    }
    class base{
        use hello{
           // hello::sayhello as public;
           hello::sayhello as public newhello;
        }
    }
    $test = new base();
    //$test->sayhello();
    $test->newhello();
?>