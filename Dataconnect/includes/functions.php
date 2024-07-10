<?php
// Function to sanitize input data
function sanitize_input($input) {
    return htmlspecialchars(trim($input));
}

// Function to generate a random token
function generate_token($length = 20) {
    $token = bin2hex(random_bytes($length));
    return $token;
}
?>