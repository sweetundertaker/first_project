<?php
class Car {
    public $color;
    public $speed;
}
$car = new Car();
$car->color = 'белый';
$car->speed = 220;
echo "Моя машина имеет $car->color цвет и может двигаться со скоростью $car->speed км/ч";
