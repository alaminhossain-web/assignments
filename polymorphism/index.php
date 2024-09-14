<?php
require_once 'Dog.php';
require_once 'Cat.php';
require_once 'Cow.php';

function printAnimalSound(Animal $animal): void {
    echo $animal->makeSound() . "</br>";
}


$dog = new Dog();
$cat = new Cat();
$cow = new Cow();


printAnimalSound($dog); 
printAnimalSound($cat);
printAnimalSound($cow); 
?>
