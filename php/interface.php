<?php
// Definition eines Interfaces
interface Greeter {
    public function greet();
}

// Eine Klasse, die das Interface implementiert
class Person implements Greeter {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function greet() {
        return "Hallo";
    }

}

$person1 = new Person("Martin");
echo $person1->greet();





/*
zurück-Button
*/ 
echo '<button class="back-button" onclick="history.back()">Zurück</button>';