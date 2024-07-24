<?php
// Basisklasse
class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce() {
        return "Hallo, mein Name ist " . $this->name . " und ich bin " . $this->age . " Jahre alt.";
    }
}

// Abgeleitete Klasse
class Developer extends Person {
    public $programmingLanguage;

    public function __construct($name, $age, $programmingLanguage) {
        parent::__construct($name, $age);
        $this->programmingLanguage = $programmingLanguage;
    }

    public function code() {
        return "Ich programmiere in " . $this->programmingLanguage . ".";
    }
}


$developer1 = new Developer("Martin", 44, "PHP");
echo $developer1->introduce() . "<br>";
echo $developer1->code() . "<br><br>";

// 2. Abgeleitete Klasse
class Barista extends Person {
    public $berufsbezeichnung;

    public function __construct($name, $age, $berufsbezeichnung) {
        parent::__construct($name, $age);
        $this->berufsbezeichnung = $berufsbezeichnung;
    }

    public function code() {
        return "Ich programmiere nicht, ich bin ". $this->berufsbezeichnung .".";
    }

    public function barista() {
        return "Ich bereite Kaffee zu - und zwar den Besten :) !";
    }
}

$barista1 = new Barista("Martin", 44, "Barista");

echo $barista1->introduce() . "<br>";
echo $barista1->code() . "<br>";
echo $barista1->barista();





/*
zurück-Button
*/ 
echo '<button class="back-button" onclick="history.back()">Zurück</button>';