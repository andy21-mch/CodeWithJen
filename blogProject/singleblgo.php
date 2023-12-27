<?php
include 'functions.php';

session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$blog_id = $_GET['id'];
$blog = getBlogById($blog_id);

if (!$blog) {
    header('Location: blogs.php');
    exit();
}
?>

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
        <h1>
            <?= $blog[1] ?>
        </h1>
    </header>
    <main>
        <p>
            <?= $blog[2] ?>
        </p>
        <a href="blogs.php">Back to Blogs</a>
    </main>
    <footer>
        <p>&copy; 2023 My Blog</p>
    </footer>
</body>

</html>