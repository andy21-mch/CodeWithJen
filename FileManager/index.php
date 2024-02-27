<!-- index.php -->
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

        h1 {
            color: #333;
            text-align: center;
            margin-top: 50px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0 auto;
            text-align: center;
        }

        li {
            display: inline-block;
            margin: 10px;
        }

        a.link {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #0056b3;
        }

        .file-list {
            margin: 20px auto;
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .file-list h2 {
            color: #333;
            margin-bottom: 10px;
        }

        .file-list ul {
            padding: 0;
        }

        .file-list li {
            margin-bottom: 10px;
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Simple File Management System</h1>
    <ul>
        <li><a class="link" href="create.php">Create File</a></li>
        <li><a class="link" href="upload.php">Upload File</a></li>
    </ul>

    <div class="file-list">
        <h2>List Files</h2>
        <?php include 'file_list.php'; ?>
    </div>
</body>
</html>