<?php
// Define ASCII campfire frames
$frames = [
    "
     (  )
    (   888 )
    (____)
     |  |
    /|__|\\
   / |__| \\
  /  |__|  \\
 /___|__|___\\
    |  |
    |__|
    /  \\
   /    \\
  /______\\
",
    "
     (  )
    ( 66   )
    (____)
     |  |
    /|__|\\
   / |__| \\
  /  |__|  \\
 /___|__|___\\
    |  |
    |__|
    /  \\
   /    \\
  /______\\
  |      |
",
    "
     (  )
    (    )
    (__66__)
     |  |
    /|__|\\
   / |__| \\
  /  |__|  \\
 /___|__|___\\
    |  |
    |_66_|
    /  \\
   /    \\
  /______\\
   |    |
   |____|
",
    "
     (  )
    (    )
    (__66_)
     |  |
    /|__|\\
   / |__| \\
  /  |__|  \\
 /___|__|___\\
    |  |
    |__6|
    /  \\
   /    \\
  /______\\
    |  |
    |__|
"
];

// Get the frame number from the query string
$frame = isset($_GET['frame']) ? intval($_GET['frame']) % count($frames) : 0;

// Output the current frame
header('Content-Type: text/plain; charset=utf-8'); // Ensure the correct content type
echo $frames[$frame];
?>
