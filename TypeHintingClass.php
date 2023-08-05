<?php
    class hello{
        public function sayhello(){
            echo "Hello Everyone";
        }
    }
    class by{
        public function sayby(){
            echo"Hello By";
        }
    }
    function wow(hello $c){
        $c->sayhello();
    }
    $test=new hello();
    wow($test);
?>