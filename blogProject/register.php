<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Blogs</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-TfRjWl1+tcYVMpXa7q3Xz5F5LCLaBhXaP5TqCy1CDDrd1Nw7dFRQdApeCIZzgDx" crossorigin="anonymous">
    <!-- Your custom CSS file -->
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <header>
        <h1>Register</h1>
    </header>
    <main>
        <form action="register_process.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Register</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2023 My Blog</p>
    </footer>
</body>
</html>
