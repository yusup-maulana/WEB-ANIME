<?php
// Include the necessary files
include('session.php');

// Check if the form is submitted
if (isset($_POST["user"])) {
    // Get the submitted username and password
    $username = $_POST["user"];
    $password = $_POST["pass"];
    // Authenticate the user
    $user_id = authenticateUser($username, $password);

    // Check the authentication result
    if ($user_id) {
        // Login successful
        login($user_id);
        header("Location: admin_utama.php");
    } else {
        // Login failed
        header("Location: index.php?res=2");
    }
} else {
    // Redirect or handle the case when the form is not submitted
    header("Location: index.php?res=1");
    exit();
}
