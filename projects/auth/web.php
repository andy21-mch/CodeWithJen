<?php

include_once('functions.php');

// Define routes based on form actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    switch ($_POST['action']) {
        case 'register':
            registerUser();
            break;

        case 'login':
            loginUser();
            break;

        // Add more cases for other form actions as needed

        default:
            // Handle unexpected action
            break;
    }
}
