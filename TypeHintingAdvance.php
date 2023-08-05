<?php
    class school{
        public function getNames(student $names){
            foreach($names->names() as $name){
            echo $name ."<br>";
            }
        }
    }
    class student{
        public function names(){
            return ["Ram","Mohan","Vinay"];
        }
    }
    class library{

    }
    $lib =new library();
    $stu = new student();
    $sch = new school();

    $sch->getnames($stu);
?>