<?php

/**
 * import functions.php to get access to the saveFormDataToFile function.
 */
include_once "functions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handling Example</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form method="post">
        <h1 style="text-align: center;">CSV Storage</h1>
        <hr>
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <button type="submit" name="submit">Submit</button>
    </form>

    <!-- New section to display data in a table -->
    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Validate form data (add more validation as needed)
    
        $formData = [$name, $email, $password];

        if (saveFormDataToFile($formData)) {
            echo '<p>Data has been saved successfully!</p>';

        } else {
            echo '<p>Data has not been saved successfully!</p>';

        }
    }


    ?>

</body>

</html>