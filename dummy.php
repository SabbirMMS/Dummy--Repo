<?php
// Function to generate a random table
function generateRandomTable($rows, $cols) {
    echo '<table border="1">';
    for ($i = 0; $i < $rows; $i++) {
        echo '<tr>';
        for ($j = 0; $j < $cols; $j++) {
            // Generate a random number between 1 and 100 for each cell
            $randomValue = rand(1, 100);
            echo '<td>' . $randomValue . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

// Set the number of rows and columns
$rows = 5;
$cols = 5;

// Call the function to generate the random table
generateRandomTable($rows, $cols);
?>

