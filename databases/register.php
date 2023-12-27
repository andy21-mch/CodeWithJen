<?php

/**
 * import functions.php to get access to the saveFormDataToFile function.
 */
include_once "conn.php";
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
        <label for="full_name">Name:</label>
        <input type="text" name="full_name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="email">Gender:</label>
        <input type="text" name="Gender" required>

        <label for="email">Date:</label>
        <input type="date" name="reg_date" required>

        <label for="email">Time:</label>
        <input type="time" name="reg_time" required>

        <label for="country">Country:</label>
        <input type="text" name="country" required>

        <button type="submit" name="submit">Submit</button>
    </form>

    <!-- New section to display data in a table -->
    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['full_name'];
        $email = $_POST['email'];
        $gender = $_POST['Gender'];
        $date = $_POST['reg_date'];
        $time = $_POST['reg_time'];
        $country = $_POST['country'];

        $datetime = $date . ' ' . $time;


        $sqlInsertData = "INSERT INTO Students 
        (full_names, country, email, Gender, reg_date)
        VALUES 
        ('$name','$country','$email', '$gender', '$datetime')";

       
        if (executeQuery($conn, $sqlInsertData)) {
            echo "Data inserted successfully";
        }


    }


    ?>

</body>

</html>