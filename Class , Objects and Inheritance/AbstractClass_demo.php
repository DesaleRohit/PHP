<?php
    abstract class student
    {
        public $id;
        public $name;
        public function getdata($a,$b)
        {
            $this->id=$a;
            $this->name=$b;
        }
        abstract public function display();
    }
    class s1 extends student
    {
        public function display()
        {
            echo "Student ID: " . $this->id;
            echo "<br>";
            echo "Student Name: " . $this->name;
            echo "<br>";
        }
    }
    $obj = new s1();
    $obj->getdata(1,"Dhanesh");
    $obj->display();
?>