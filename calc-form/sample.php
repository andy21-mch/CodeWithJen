<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fform</title>
</head>
<body>

<form action="sample.php" method="post">
    Name: <input type="name" name="name">
    Email: <input type="email" name="email">
    Password: <input type="password" name="password">
   
    <button type="submit">Submit</button>
</form>
    

<?php 

echo "HEllo ". $_POST['name'] .'<br>';
echo "HEllo ". $_POST['email'] .'<br>';
echo "HEllo ". $_POST['password'] .'<br>';

?>
</body>
</html>