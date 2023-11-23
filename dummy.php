<?php

// Check if the key parameter is set and not null
if (isset($_GET['key']) && $_GET['key'] !== null) {
    echo "Success! The parameter key has a non-null value.";
} else {
    echo "Invalid parameter. The key parameter is missing or has a null value.";
}

?>
