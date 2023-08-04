<?php

    class base
    {
        protected static $name="Ravikant";
        public function show()
        {
                echo self::$name;
                echo static::$name;

        }
    }
    class derived extends base
    {
        protected static $name="Maurya";
    }
    $test = new derived();
    $test->show();
?>