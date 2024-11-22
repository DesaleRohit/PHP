<?php
class myclass
{
    public $a = "<p>This is Public Attribute";
    protected $b = "<p>This is Protected Attribute";
    private $c = "<p>This is Private Attribute";

    public function one()
    {
        echo "<p>This is Public Method";
    }
    protected function two()
    {
        echo "<p>This is Protected Method";
    }
    private function three()
    {
        echo "<p>This is Private Method";
    }
}

$obj = new myclass();
//public attribute and method
echo $obj->a;
$obj->one();

//protected attribute and method
echo $obj->b; //can't be accessible due to protected but accessible after inheritance
$obj->two();

//private sttribute and method
echo $obj->c; //can't be accessible due to private
$obj->three();
