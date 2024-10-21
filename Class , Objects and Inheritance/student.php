<?php
class Student
{
    public $id;
    public $name;
    public $fees;


    function __construct()
    {
        $this->id = 0;
        $this->name = "";
        $this->fees = 0;
    }
    function __destruct()
    {
        echo "Object is destroyed<br>";
    }
    function setdata($id, $name, $fees)
    {
        $this->id = $id;
        $this->name = $name;
        $this->fees = $fees;
    }
    function showdata()
    {
        echo $this->id . " " . $this->name . " " . $this->fees;
    }
}
$S1 = new Student();
$S1-> setdata(1, "Dhanesh", 1000);
$S1->showdata();
echo "<br><br>";
$S2 = new Student();
$S2->setdata(2, "Swapnil", 2000);
$S2->showdata();
echo "<br><br>";
$S3 = new Student();
$S3->setdata(3, "Rohit", 3000);
$S3->showdata();
echo "<br><br>";
echo "Total fees of Student = ".($S1->fees + $S2->fees + $S3->fees);
echo "<br><br>";
?>
