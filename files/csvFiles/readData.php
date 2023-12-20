<?php

/**
 * import functions.php to get access to the readDataFromFile function.
 */
include "functions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display users</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Users Table</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>

        <tbody>

            <?php
            /**
             * create a variable an assign the return values of readDataFromFile() to
             * NB: getDataFromFile returns and Array, check it and see
             */
            $users = getDataFromFile();

            /**
             * loop through the array and display the values
             * take note that you can replace 
             *      <?= $user[] ?> with 
             *      <?php echo $user[] ?>
             */
            foreach ($users as $user) {
                ?>
                <tr>
                    <td>
                        <?= $user[0]; ?>

                    </td>
                    <td>
                        <?= $user[1]; ?>
                    </td>
                    <td>
                        <?= substr(htmlspecialchars($user[2]), 0, 25) ?>
                    </td>
                </tr>
                <?php
            } ?>


        </tbody>
    </table>


</body>

</html>