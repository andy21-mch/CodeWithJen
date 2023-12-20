<?php
function saveFormDataToFile($data)
{
    $file = fopen("data.csv", "a");

    // Hash the password before saving
    $data[2] = password_hash($data[2], PASSWORD_DEFAULT);

    // Use fputcsv to handle CSV formatting
    if (fputcsv($file, $data)) {
        fclose($file);
        return true;

    }
    fclose($file);
    return false;
}

function getDataFromFile()
{
    $rawData = [];

    // Open the file for reading
    $file = fopen("data.csv", "r");

    // Read the file line by line
    while (($line = fgetcsv($file)) !== false) {
        $rawData[] = $line;
    }

    // Close the file
    fclose($file);

    return $rawData;
}


function loginUser($username, $password)
{
    $rawData = getDataFromFile();

    // Prioritize security: Hash the input password before comparison
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    foreach ($rawData as $row) {
        // Access username and password columns by their indices (adapt if different)
        if ($row[0] === $username && password_verify($password, $row[1])) {
            return true;  // Successful login
        }
    }

    return false;  // Login failed
}