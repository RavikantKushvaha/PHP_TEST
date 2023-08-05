<?php
    function fruits(array $names){
        foreach ($names as $name)
            echo $name ."<br>";
    }
    $test = ["apple","Banana","Orange"];
    fruits($test);
?>