<?php

// Database connection parameters
$host = "your_database_host";
$username = "your_database_username";
$password = "your_database_password";
$database = "your_database_name";

// Sample user credentials for demonstration
$correctUsername = "admin";
$correctPassword = "admin_password";

// Get login and password from the user (in a real scenario, these values would come from a form)
$login = $_POST['login'];
$password = $_POST['password'];

// Check if debug mode is enabled
$debug = isset($_GET['debug']) ? ($_GET['debug'] === 'true') : false;

// Function to authenticate user against the database
function authenticateUser($login, $password, $correctUsername, $correctPassword)
{
    // In a real scenario, this function would query the database
    // Here, we'll just compare against hardcoded values for demonstration purposes
    return ($login === $correctUsername) && ($password === $correctPassword);
}

// Perform authentication
if ($debug) {
    // Allow access directly to admin console in debug mode
    echo "Debug mode is enabled. Access granted to admin console.";
} else {
    // Authenticate user against the database
    $authenticated = authenticateUser($login, $password, $correctUsername, $correctPassword);

    if ($authenticated) {
        echo "Login successful. Welcome to the admin console.";
    } else {
        echo "Incorrect login or password. Access denied.";
    }
}

?>
