<?php

/*  $box=[];
$box[1]="Первая коробка содержит рыбу";
$box['joys']="Вторая коробка содержит игрушки";

echo $box[1] . PHP_EOL;
echo $box['joys']. PHP_EOL;
*/

class Man
{
    public $name;
    public $age;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

}
$human = new Man;
$human->setName(Александр);
$human->setAge(26);
$human1 = new Man;
$human1->setName(Никита);
$human1->setAge(26);

echo 'Привет, меня зовут ' . $human->name . PHP_EOL;
echo 'Мне ' . $human->age . ' лет' . PHP_EOL;
echo 'Привет, меня зовут ' . $human1->name . PHP_EOL;
echo 'Мне ' . $human1->age . ' лет' . PHP_EOL;
