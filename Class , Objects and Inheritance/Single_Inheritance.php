<?php
    class Student
    {
        public $id;
        public $name;
        public function setdata($id, $name)
        {
            $this->id = $id;
            $this->name = $name;
        }
    }
    class Internal extends Student
    {
        public $internal_cpp;
        public $internal_php;
        function setInternal($icpp, $iphp)
        {
            $this->internal_cpp = $icpp;
            $this->internal_php = $iphp;
        }
    }

    $S1 = new Internal();
    $S1->setdata(1, "Dhanesh");
    $S1->setInternal(80, 90);
    echo "Student ID: " . $S1->id;
    echo "<br>";
    echo "Student Name: " . $S1->name;
    echo "<br>";
    echo "Internal C++ Marks: " . $S1->internal_cpp;
    echo "<br>";
    echo "Internal PHP Marks: " . $S1->internal_php;
    
    ?>