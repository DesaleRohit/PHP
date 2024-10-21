<?php
    class Student
    {
        public $id;
        public $name;
       
        function setStudent($sid, $sname)
        {
            $this->id = $sid;
            $this->name = $sname;
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
      class External extends Internal
      {
        public $external_cpp;
        public $external_php;
        function setExternal($ecpp, $ephp)
        {
            $this->external_cpp = $ecpp;
            $this->external_php = $ephp;
        }
      
      function showExternal()
      {
        echo "<p>ID = ".$this->id;
        echo "<p>Name = ".$this->name;
        echo "<p>External C++ Marks = ".$this->internal_cpp;
        echo "<p>External PHP Marks = ".$this->internal_php;
        echo "<p>External C++ Marks = ".$this->external_cpp;
        echo "<p>External PHP Marks = ".$this->external_php;
      }
    }

    $S1 = new External();
    $S1->setStudent(1, "Dhanesh");
    $S1->setInternal(80, 90);
    $S1->setExternal(70, 80);
    $S1->showExternal();
?>