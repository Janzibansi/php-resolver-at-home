<?php
// Dies ist ein einzeiliger Kommentar in PHP

/*
Dies ist ein mehrzeiliger Kommentar in PHP.
Man kann hier mehrere Zeilen schreiben.
*/

// Die echo-Anweisung gibt Text an den Browser aus.
echo "Hello, World!<br><br>";

// Variablen in PHP beginnen mit einem Dollarzeichen ($)
$greeting = "Hello";
$audience = 123123;

// Verkettung von Strings mit dem Punkt (.)
echo (int)$audience + (float)$audience ;
?>

<div>
    <?= $audience ?> 
</div>




/*
zurück-Button
*/ 
echo '<br><br><button class="back-button" onclick="history.back()">Zurück</button>';

/**
 * NOTIZ AN MICH SELBST:
 * 
 * vergiss die <?= BLABLUBB ?> nicht, und die Verwendung von PHP mit HTML zusammen! (=> .phtml in Magento)
 */