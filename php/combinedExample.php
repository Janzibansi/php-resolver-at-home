<?php
// Variablen
$name = "Martin";
$age = 42;
$favoriteColors = array("Rot", "Grün", "Blau");

// Begrüßung
echo "Hallo, " . $name . "!<br>";
echo "Du bist " . $age . " Jahre alt.<br>";

// Kontrollstruktur mit Schleife
echo "Deine Lieblingsfarben sind:<br>";
foreach ($favoriteColors as $color) {
    echo "- " . $color . "<br>";
}

// Bedingung
if ($age >= 18) {
    echo "Du bist volljährig.<br>";
} else {
    echo "Du bist nicht volljährig.<br>";
}

// Switch-Case für den Wochentag
$day = "Mittwoch";
switch ($day) {
    case "Montag":
        echo "Heute ist Montag.<br>";
        break;
    case "Dienstag":
        echo "Heute ist Dienstag.<br>";
        break;
    case "Mittwoch":
        echo "Heute ist Mittwoch.<br>";
        break;
    default:
        echo "Ein anderer Tag.<br>";
        break;
}




/*
zurück-Button
*/ 
echo '<button class="back-button" onclick="history.back()">Zurück</button>';
?>