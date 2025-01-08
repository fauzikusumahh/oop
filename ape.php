<?php
require_once "animal.php";

class Ape extends Animal {
    public $legs = 2; // Kera hanya memiliki 2 kaki

    public function yell() {
        return "Auooo";
    }
}
?>
