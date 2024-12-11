<?php
    class student
    {
        public $id;
        public $name;

        function __construct($id, $name)
        {
            $this->id = $id;
            $this->name = $name;
        }
        function __destruct()
        {
            echo "Object is destroyed<br>";
        }
        public function display()
        {
            echo "Student ID: " . $this->id;
            echo "<br>";
            echo "Student Name: " . $this->name;
            echo "<br>";
        }
    }
    $s1 = new student(1, "Dhanesh");
    $s1->display();
    echo "<br>";
    $s2 = new student(2, "Swapnil");
    $s2->display();
    echo "<br>";
    $s3 = new student(3, "Rohit");
    $s3->display();
    echo "<br>";
?>