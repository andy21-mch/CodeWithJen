<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple File Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        form input[type="text"],
        form select {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form textarea {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: vertical;
        }

        form button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            float: right;
        }

        form button:hover {
            background-color: #45a049;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 5px;
        }

        .actions {
            margin-top: 10px;
        }

        .actions button {
            margin-left: 5px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            padding: 5px 10px;
        }

        .actions button:hover {
            background-color: #0056b3;
        }

        .edit-link {
            color: blue;
            cursor: pointer;
            text-decoration: underline;
        }
    </style>

</head>

<body>
    <div class="container">
        <h1>Simple File Management System</h1>

        <form action="actions.php" method="post">
            <label for="fileName">Create File:</label>
            <input type="text" name="fileName" id="fileName" placeholder="Enter file name">
            <select name="fileExtension" id="fileExtension">
                <option value=".txt">.txt</option>
                <option value=".docx">.docx</option>
                <option value=".pdf">.pdf</option>
                <!-- Add more file extensions as needed -->
            </select>
            <textarea name="fileContent" rows="10" cols="50" placeholder="Enter file content"></textarea><br>
            <button type="submit" name="create">Create</button>
        </form>

        <h2>Uploaded Files:</h2>
        <ul>
            <?php include 'file_list.php'; ?>
        </ul>
    </div>
</body>

</html>