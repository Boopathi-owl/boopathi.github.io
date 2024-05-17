<?php

// File to store the visitor count
$counter_file = 'visitor_count.txt';

// Function to read the current visitor count from the file
function getVisitorCount() {
    global $counter_file;
    if (file_exists($counter_file)) {
        $count = intval(file_get_contents($counter_file));
    } else {
        $count = 0;
    }
    return $count;
}

// Function to increment the visitor count and save it to the file
function incrementVisitorCount() {
    global $counter_file;
    $count = getVisitorCount();
    $count++;
    file_put_contents($counter_file, $count);
}

// Increment the visitor count when someone visits the page
incrementVisitorCount();

// Display the visitor count
echo "Total visitors: " . getVisitorCount();

?>

