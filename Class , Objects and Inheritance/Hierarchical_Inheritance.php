<?php

    class Student
    {
        public $id;
        public $name;
        function setStudent($sid,$sname)
        {
            $this->id=$sid;
            $this->name=$sname;
        }
    }

    class Internal extends Student
    {
        public $internal_cpp;
        public $internal_php;
        function setInternal($icpp,$iphp)
        {
            $this->internal_cpp = $icpp;
            $this->internal_php = $iphp;
        }
        function showInternal()
        {
            echo "<p>ID=".$this->id;
            echo "<p>Name=".$this->name;
            echo "<p>Internal Marks of C++=".$this->internal_cpp;
            echo "<p>Internal Marks of PHP=".$this->internal_php;
        }
    }

    class External extends Student
    {
        public $external_cpp;
        public $external_php;
        function setExternal($ecpp,$ephp)
        {
            $this->external_cpp = $ecpp;
            $this->external_php = $ephp;
        }
        function showExternal()
        {
            echo "<p>ID=".$this->id;
            echo "<p>Name=".$this->name;
            echo "<p>External Marks of C++=".$this->external_cpp;
            echo "<p>External Marks of PHP=".$this->external_php;
        }
    }

    $Internal1 = new Internal();
    $Internal1->setStudent(1,"Nayan");
    $Internal1->setInternal(19,17);
    $Internal1->showInternal();

    $External1 = new External();
    $External1->setStudent(1,"Nayan");
    $External1->setExternal(67,54);
    $External1->showExternal();

?>