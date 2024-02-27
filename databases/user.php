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
    <title>Single user page</title>

    <style>
        .card {
            border: 1px solid #ddd;
            padding: 20px;
            margin: 20px;
            border-radius: 8px;
            width: 50%;
            margin: auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card p {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>



    <h1 style="text-align: center;">View User</h1>
    <hr>
    <div class="card">
        <?php

        $id = 0;
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            echo "No Id found on url";
            die;
        }

        $user = getUser($id, $conn);


        ?>
        <h2>User Information</h2>
        <p><strong>Name:
                <?php echo $user['full_names'] ?>
            </strong> </p>
        <p><strong>Email:
                <?= $user['email'] ?>
            </strong> </p>
        <p><strong>Country:
                <?= $user['country'] ?>
            </strong> </p>
        <p><strong>Gender:
                <?= $user['Gender'] ?>
            </strong> </p>
    </div>

    <a href="users.php">View All users</a>




</body>

</html>