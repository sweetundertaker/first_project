<?php
class Mage{
    public  $health;
    public  $mana;
    public $speed;
    public function magic(){
        echo "I cast my spell";
    }
}
$mage = new Mage;
$mage->magic();

