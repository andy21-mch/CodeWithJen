<?php
/**
 * Import functions.php to get access to the readDataFromFile function.
 */
include "conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display users</title>
    <style>
        * {
            font-family: 'open sans';
        }

        #contain {
            height: 100vh;
            overflow-y: scroll;
        }

        #table_scroll {
            width: 100%;
            margin-top: 100px;
            margin-bottom: 100px;
        }

        #table_scroll tbody td {
            padding: 10px;
            background-color: #7fe55e;
            color: #fff;
        }

        #table_fixed thead th {
            padding: 10px;
            background-color: #b90be0;
            color: #fff;
            font-weight: 100;
        }
    </style>
</head>

<body>
    <h1>Users Table</h1>


    <?php

    $users = getUsers($conn);

    ?>
    <table id="table_fixed">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Registration Date</th>
                <th>Country</th>
            </tr>
        </thead>
    </table>
    <div id="contain">
        <table id="table_scroll" border="0">
            <tbody>
                <?php
                foreach ($users as $user) {
                    ?>
                    <tr>
                        <td>
                            <?= $user['id']; ?>
                        </td>
                        <td>
                            <?= $user['full_names']; ?>
                        </td>
                        <td>
                            <?= $user['Gender'] ?>
                        </td>

                        <td>
                            <?= $user['reg_date'] ?>
                        </td>

                        <td>
                            <?= $user['country'] ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="script.js"> <script></script>

</body>

</html>