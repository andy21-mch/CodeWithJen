<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Update Profile</title>
</head>
<body>

<div class="container">
    <h2>Update Profile</h2>
    <form action="router.php" method="post" enctype="multipart/form-data">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="avatar">Profile Picture:</label>
        <input type="file" id="avatar" name="avatar">

        <button type="submit" name="action" value="update_profile">Update Profile</button>
    </form>
</div>

</body>
</html>
