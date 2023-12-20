<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handling Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            flex-direction: column;
            /* Updated to display form and table vertically */
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            margin-top: 100px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        p {
            color: green;
            font-weight: bold;
        }

        table {
            width: 70%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <?php
    function saveTextData($data)
    {
        $file = fopen("data.txt", "a");
        fwrite($file, implode(",", $data) . PHP_EOL);
        fclose($file);
    }

    function getDataFromFile()
    {
        $rawData = [];

        // Open the file for reading
        $file = fopen("data.txt", "r");

        // Read the file line by line
        while (!feof($file)) {
            $line = fgets($file);
            if ($line !== false) {
                $rawData[] = trim($line);
            }
        }

        // Close the file
        fclose($file);

        return $rawData;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $formData = [$name, $email, password_hash($password, PASSWORD_DEFAULT)];
        saveTextData($formData);
        echo '<p>Data has been saved successfully!</p>';
    }
    ?>

    <form method="post">
        <h1>Text File Storage</h1>
        <hr>
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <button type="submit">Submit</button>
    </form>

    <!-- New section to display data in a table -->
    <?php
    $rawData = getDataFromFile();

    if (!empty($rawData)) {
        echo '<h2>Submitted Data</h2>';
        echo '<table>';
        echo '<tr><th>Name</th><th>Email</th><th>Password</th></tr>';

        foreach ($rawData as $line) {
            $row = explode(",", $line);
            echo '<tr>';
            foreach ($row as $value) {
                echo '<td>' . substr(htmlspecialchars($value), 1, 25) . '</td>';
            }
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo '<p>No data available.</p>';
    }
    ?>

</body>

</html>