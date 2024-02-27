<?php
include 'functions.php';

session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$user_id = $_SESSION['user_id'];
$user = getUserById($user_id);
$blogs = getBlogsByUserId($user_id);
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
        <h1>Your Profile</h1>
    </header>
    <main>
        <h2>Welcome, <?= $user[1] ?>!</h2>
        <h3>Your Blogs</h3>
        <?php foreach ($blogs as $blog): ?>
            <article>
                <h4><?= $blog[1] ?></h4>
                <p><?= $blog[2] ?></p>
                <a href="singleblog.php?id=<?= $blog[0] ?>">Read More</a>
            </article>
        <?php endforeach; ?>
        <a href="createblog.php">Create New Blog</a>
        <a href="logout.php">Logout</a>
    </main>
    <footer>
        <p>&copy; 2023 My Blog</p>
    </footer>
</body>
</html>
