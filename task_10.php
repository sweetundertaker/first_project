<?php
class Mage {
    public $health;
    public $mana;
    public $speed;
    public function magic(){
        echo "I cast my spell";
    }
}
$object = new Mage();
$object ->magic();