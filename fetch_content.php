<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['selected_file'])) {
    $directory = 'php'; // Set to the subdirectory 'php'
    $fullPath = getcwd() . DIRECTORY_SEPARATOR . $directory;
    $selectedFile = $_POST['selected_file'];
    $filePath = "$fullPath/$selectedFile";

    // Check if the selected file exists
    if (file_exists($filePath)) {
        // Start output buffering
        ob_start();
        
        // Include the selected PHP file
        include $filePath;
        
        // Capture the output and clean the buffer
        $output = ob_get_clean();
        
        // Return the captured output
        echo $output;
    } else {
        echo "The file $selectedFile does not exist.";
    }
}
?>