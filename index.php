<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP-resolv@home</title>
    <link rel="stylesheet" href="css/styles.css">
    <script>
        // Function to refresh the PHP content
        function refreshContent() {
            const form = document.getElementById('fileForm');
            const formData = new FormData(form);
            const xhr = new XMLHttpRequest();
            
            xhr.open('POST', 'fetch_content.php', true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    document.getElementById('phpContent').innerHTML = xhr.responseText;
                }
            };
            xhr.send(formData);
        }

        // Refresh content every second
        setInterval(refreshContent, 1000);

        // Function to handle form submit
        function handleFormSubmit(event) {
            event.preventDefault(); // Prevent the default form submission
            refreshContent(); // Manually call refreshContent to load the initial content
        }
    </script>
</head>
<body>
<h1> we have php resolver at home </h1>
<p># add splash text</p>
<hr>
<p># add Path override FORM and submit button(2) </p>
<hr>
<p># move this to a seperate .php and put in a div container, refresh on submit button (2)
    
<!-- Form to select a file -->
<form id="fileForm" method="post" onsubmit="handleFormSubmit(event)">
    <label for="fileSelect">Choose a file:</label>
    <select name="selected_file" id="fileSelect" onchange="handleFormSubmit(event)">
        <?php
        // Directory containing PHP files
        $directory = 'php'; // Set to the subdirectory 'php'
        $fullPath = getcwd() . DIRECTORY_SEPARATOR . $directory;

        // Check if the directory exists
        if (is_dir($fullPath)) {
            // Open the directory
            $files = scandir($fullPath);

            // Filter out the current directory (.) and parent directory (..), and exclude index.php and fetch_content.php
            $phpFiles = array_filter($files, function($file) use ($fullPath) {
                return is_file("$fullPath/$file") 
                       && pathinfo($file, PATHINFO_EXTENSION) == 'php'
                       && $file !== 'index.php'
                       && $file !== 'fetch_content.php';
            });

            // Get the last selected file
            $selectedFile = isset($_POST['selected_file']) ? $_POST['selected_file'] : '';

            // Populate the dropdown with PHP files from the directory, excluding index.php and fetch_content.php
            foreach ($phpFiles as $file) {
                $selected = ($file == $selectedFile) ? 'selected' : '';
                echo "<option value=\"$file\" $selected>$file</option>";
            }
        } else {
            echo "<option disabled>The directory $fullPath does not exist.</option>";
        }
        ?>
    </select>
    <button type="submit" class="big-red-button">Submit</button>
</form>

<hr>

<!-- Div to display the included PHP content -->
<div id="phpContent"></div>

</body>
</html>
