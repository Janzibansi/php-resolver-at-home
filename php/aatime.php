<?php
// Set the default timezone to use
date_default_timezone_set('Europe/Berlin');

// Get the current time
$current_time = date('Y-m-d H:i:s');

// Get the Unix time
$unix_time = time();

// Print the current time
echo "Current time is: " . $current_time . "<br>Europe/Berlin<br>";

// Print the Unix time
echo "Unix time is: " . $unix_time;
?>