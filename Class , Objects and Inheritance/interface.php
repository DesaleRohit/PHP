<?php
interface Shape
{
    function area();
}
class CircleArea implements Shape
{
    public $radius = 5;
    public function area()
    {
        echo "<p>Area of Circle= " . (3.14 * $this->radius * $this->radius);
    }
}
class RectArea implements Shape
{
    public $base = 5;
    public $height = 6;
    public function area()
    {
        echo "<p>Area of Reactangle= " . ($this->base * $this->height);
    }
}
$CircleObject = new CircleArea();
$RectObject = new RectArea();
$CircleObject->area();
$RectObject->area();

?>