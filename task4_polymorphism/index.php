<?php

    // Base Animal class
    class Animal {
        // Method to make a sound
        public function makeSound() {
            echo "Some generic animal sound<br>";
        }
    }

    // Dog class inheriting from Animal
    class Dog extends Animal {
        // Overriding makeSound method
        public function makeSound() {
            echo "Bark! Bark!<br>";
        }
    }

    // Cat class inheriting from Animal
    class Cat extends Animal {
        // Overriding makeSound method
        public function makeSound() {
            echo "Meow! Meow!<br>";
        }
    }

    // Cow class inheriting from Animal
    class Cow extends Animal {
        // Overriding makeSound method
        public function makeSound() {
            echo "Moo! Moo!<br>";
        }
    }

    // Function to demonstrate polymorphism
    function playAnimalSounds(Animal $animal) {
        $animal->makeSound();
    }

    // Creating objects of each animal
    $dog = new Dog();
    $cat = new Cat();
    $cow = new Cow();

    // Demonstrating polymorphism
    playAnimalSounds($dog);
    playAnimalSounds($cat);
    playAnimalSounds($cow);

?>
