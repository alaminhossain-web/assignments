<?php
require_once 'Animal.php';

class Cow extends Animal {
    public function makeSound(): string {
        return "Hamba Hamba!";
    }
}
?>
