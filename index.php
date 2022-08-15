<?php

/*  $box=[];
$box[1]="Первая коробка содержит рыбу";
$box['joys']="Вторая коробка содержит игрушки";

echo $box[1] . PHP_EOL;
echo $box['joys']. PHP_EOL;
*/

class Human {
    public $name;

    public $age;

    public function setName($name) {  // для чего мы указали в скобочках $name
        $this->name = $name; //  для чего ипользуюется $this
    }
}

//$var - Объект, экземпляр класса Human
$var = new Human();