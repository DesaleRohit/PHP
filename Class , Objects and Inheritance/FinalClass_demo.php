<?php
    final class student
    {
        public $id;
        public $name;
        function __construct($a,$b)
        {
            $this->id = $a;
            $this->name = $b;
        }

        public function show()
        {
            echo "Student ID: " . $this->id;
            echo "<br>";
            echo "Student Name: " . $this->name;
            echo "<br>";
        }
    }

    // cannot be inherited due to final class

    // class s1 extends student
    // {

    // }

    $obj = new student(1,"Dhanesh");
    $obj->show();

?>