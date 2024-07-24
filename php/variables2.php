<?php
// Eine Variable definieren und einen Wert zuweisen
$name = "Martin";
$age = 42;
$isDeveloper = true;

// Variablen ausgeben
echo "Name: " . $name . "<br>";
echo "Alter: " . $age . "<br>";

// temporärer Operator (if-/else Kurzform)
echo "Entwickler: " . ($isDeveloper ? "Ja" : "Nein") . "<br>";

/*
zurück-Button
*/ 
echo '<button class="back-button" onclick="history.back()">Zurück</button>';