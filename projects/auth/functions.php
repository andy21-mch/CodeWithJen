<?php

// Helper function to read CSV file
function readCsv($filePath)
{
    $rows = [];
    if (($handle = fopen($filePath, 'r')) !== false) {
        while (($data = fgetcsv($handle)) !== false) {
            $rows[] = $data;
        }
        fclose($handle);
    }
    return $rows;
}

// Helper function to write to CSV file
function writeCsv($filePath, $data)
{
    if (($handle = fopen($filePath, 'a')) !== false) {
        fputcsv($handle, $data);
        fclose($handle);
    }
}

// Function to register a new user
function registerUser($username, $password, $email)
{
    $users = readCsv('users.csv');
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $newUser = [$username, $hashedPassword, $email];

    // Check if the username or email already exists
    foreach ($users as $user) {
        if ($user[0] === $username || $user[2] === $email) {
            return false;
        }
    }

    writeCsv('users.csv', $newUser);
    return true;
}

// Function to authenticate user
function authenticateUser($username, $password)
{
    $users = readCsv('users.csv');

    foreach ($users as $user) {
        if ($user[0] === $username && password_verify($password, $user[1])) {
            // User authenticated
            return true;
        }
    }

    // Authentication failed
    return false;
}

// Function to update user profile
function updateProfile($username, $newEmail)
{
    $users = readCsv('users.csv');

    foreach ($users as &$user) {
        if ($user[0] === $username) {
            $user[2] = $newEmail;
            break;
        }
    }

    // Update CSV file
    $fp = fopen('users.csv', 'w');
    foreach ($users as $fields) {
        fputcsv($fp, $fields);
    }
    fclose($fp);
}
