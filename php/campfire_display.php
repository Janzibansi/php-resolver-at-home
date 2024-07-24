<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Animated Campfire</title>
    <style>
        #campfire {
            font-family: monospace;
            white-space: pre; /* Preserve whitespace and line breaks */
            width: 300px;
            height: 300px;
            overflow: hidden;
            border: 1px solid #000;
            padding: 10px;
            background: #111;
            color: #fff;
            margin: 0 auto;
            text-align: center;
        }
    </style>
    <script>
        let currentFrame = 0;

        function updateCampfire() {
            const xhr = new XMLHttpRequest();
            xhr.open('GET', 'campfire.php?frame=' + currentFrame, true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    document.getElementById('campfire').textContent = xhr.responseText; // Use textContent to preserve ASCII art formatting
                }
            };
            xhr.send();
            currentFrame = (currentFrame + 1) % 4; // Cycle through frames
        }

        // Update the campfire every 500 milliseconds
        setInterval(updateCampfire, 500);

        // Initialize the campfire
        window.onload = function() {
            updateCampfire();
        };
    </script>
</head>
<body>
    <div id="campfire"></div>
</body>
</html>
