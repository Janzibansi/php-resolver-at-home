<?php
class Person {
    public $name;          // Öffentliche Eigenschaft
    protected $age;        // Geschützte Eigenschaft
    private $salary;       // Private Eigenschaft

    // Konstruktor mit Standardwerten
    public function __construct($name = "Unbekannt", $age = 0, $salary = 0) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    // Öffentliche Methode
    public function introduce() {
        return "Hallo, mein Name ist " . $this->name . " und ich bin " . $this->age . " Jahre alt.";
    }

    // Geschützte Methode
    protected function displayAge() {
        return "Ich bin " . $this->age . " Jahre alt.";
    }

    // Private Methode
    private function displaySalary() {
        return "Mein Gehalt ist " . $this->salary;
    }

    // Öffentliche Methode zum Zugriff auf die private Methode
    public function showSalary() {
        return $this->displaySalary();
    }
}

class Developer extends Person {
    public function getAge() {
        return $this->displayAge(); // Zugriff auf geschützte Methode der Elternklasse
    }

    public function getSalary() {
        return $this->displaySalary();
    }
}

$person1 = new Person("Martin", 42, 50000);
echo $person1->introduce() . "<br>";
echo $person1->displaySalary() . "<br>"; // Zugriff auf private Methode über öffentliche Methode
//echo $person1->displayAge();
//echo $person1->displaySalary();

$developer1 = new Developer("Anna", 30, 60000);
echo $developer1->introduce() . "<br>";
echo $developer1->getAge(); // Zugriff auf geschützte Methode der Elternklasse
//echo $developer1->getSalary();






/*
zurück-Button
*/ 
echo '<button class="back-button" onclick="history.back()">Zurück</button>';