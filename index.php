<?php
class Mage{
    public  $health;
    public  $mana;
    public $speed;
    public function magic(){
        echo "I cast my spell";
    }
}
$mage123 = new Mage;
$mage123->magic();

