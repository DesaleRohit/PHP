<?php
    interface Vehicle_s
    {
        public function start();
    }
    interface vechicle_m
    {
        public function move();
    }
    class Car implements Vehicle_s,vechicle_m
    {
        public function start()
        {
            echo "<p>Car started";
        }
        public function move()
        {
            echo "<p>Car moved";
        }
    }
    $car = new Car();
    $car->start();
    $car->move();
?>