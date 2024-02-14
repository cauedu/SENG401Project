<?php

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $role = $_POST["role"];
    
    // Placeholder for processing the form data 
    // For now, it echoes the submitted data
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Role: " . $role . "<br>";
    
    // Redirect the user back to the main page (index.html)
    header("Location: index.html");
    exit;
} else {
    // If the form hasn't been submitted, redirect the user back to the form page
    header("Location: form.html");
    exit;
}
