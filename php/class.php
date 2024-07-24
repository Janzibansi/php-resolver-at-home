<?php

// Basisklasse
class Person {
    public $name;
    public $age;
    public $lang;

    public function __construct($name,$age,$lang) {
        $this->name = $name;
        $this->age = $age;
        $this->lang = $lang;
    }

    public function introduce() {
        return "Hallo, mein Name ist " . $this->name . " und ich bin " . $this->age . " Jahre alt. Ich programmiere " . $this->lang . ".<br>";
    }
}



$person1 = new Person("Martin", 44, "PHP");
$person2 = new Person("John Doe", 32, "Assembler");



echo $person1->introduce();
echo $person2->introduce();


/*
zurück-Button
*/ 
echo '<br><button class="back-button" onclick="history.back()">Zurück</button>';