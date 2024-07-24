<?php
// If/Else
$age = 19;

if ($age >= 18) {
    echo "Du bist volljährig.<br>";
}
else {
    echo "geh nach hause <br>";
}

/**
 * NOTIZ AN MICH SELBST:
 * 
 * vergiss
 * 
 * <?php if(...) : ?> 
 *      <p>irgendeinquatsch</p>
 * <?php else: ?>
 *      <p>irgendeingaga</p>
 * <?php endif; ?>
 * 
 * nicht!
 */

 echo "<br><hr><br>";
// For
for ($i = 0; $i < 5; $i++) {
    echo "Dies ist Durchlauf Nummer: " . $i . "<br>";
}

echo "<br>";

// Die Änderung der Laufzeitvariable kann auch eine andere Größe haben, bspw. sich immer um 2 erhöhen:
for ($i = 0; $i < 10; $i+=2) {
    echo "$i hat den Wert: " . $i . "<br>";
}
echo "<br>";

// ...oder sich um den Faktor 3 verändern

echo "<br>";


echo "<br><hr><br>";

// While
$count = 0;

while ($count < 5) {
    echo "Der Zähler ist: " . $count . "<br>";
    $count++;
}


echo "<br><hr><br>";

// Switch
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