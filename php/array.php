<?php
// Indiziertes Arrays
$colors = array("Rot", "Grün", "Blau");
// verkürzte Syntax
$_color = [ "Rot", "Grün", "Blau" ];

// Ein Element ausgeben
echo "Die erste Farbe ist: " . $colors[2] . "<br>";
echo "<br><hr><br>";



// Alle Elemente ausgeben
foreach ($colors as $color) {
    echo "Farbe: " . $color . "<br>";
}

echo "<br><hr><br>";
?>




<?php foreach($colors as $key => $value) : ?> 
    <div>
      <p>Iterationsanweisungen <?=$value?> </p>
    </div>
<?php endforeach; ?>



<?= "<br><hr><br>"; ?>

<?php
// Assoziatives Array

$person = array(
    "Name" => "Martin",
    "Alter" => 42,
    "Beruf" => "Webentwickler"
);

// Ein Element ausgeben
echo "Name: " . $person["Name"] . "<br>";

// Alle Elemente ausgeben
foreach ($person as $key => $value) {
    echo $key . ": " . $value . "<br>";
}


echo "<br><hr><br>";


/*
zurück-Button
*/ 
echo '<button class="back-button" onclick="history.back()">Zurück</button>';