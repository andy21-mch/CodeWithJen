<!DOCTYPE html>
<html>

<head>
    <title>Animal Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<style>
    form {
        border-radius: 10px;
        padding: 2%;
        background-color: aliceblue;
    }
</style>

<body>
    <div class="container m-auto w-50 p-5 mt-5">
        <h1 class="text-center">Animal Form</h1>

        <form method="POST" action="" class="p-5">
            <div class="form-group">
                <label for="animal_name">Animal Name:</label>
                <input type="text" class="form-control" id="animal_name" name="name" required>
            </div>

            <div class="form-group">
                <label for="animal_type">Animal Type:</label>
                <input type="text" class="form-control" id="animal_type" name="type" required>
            </div>

            <div class="form-group">
                <label for="animal_age">Animal Age:</label>
                <input type="number" class="form-control" id="animal_age" name="age" required>
            </div>

            <!-- Add more fields for other attributes of the Animal class here -->

            <button type="submit" class="btn btn-primary" name="save">Submit</button>
            <!-- <a href="?save" class="btn btn-success">Save Animals</a> -->
        </form>

        <?php

        if (isset ($_POST['save'])) {
            $name = $_POST['name'];
            $type = $_POST['type'];
            $age = $_POST['age'];

            include "Animal.php";

            $animal = new Animal();

            $animal->setName($name);
            $animal->setType($type);
            $animal->setAge($age);
            $animal->save('animal.json');

        }

        $animal = new Animal();
        $animals = $animal->getAllObjects('animal.json');
        var_dump($animals);

        ?>


<ul>
    <li>Please update this method</li>
</ul>

        <table class="table table-bordered">

            <thead>
                <th>Name</th>
                <th>Type</th>
                <th>Age</th>
            </thead>

            <tbody>
                <?php 

                foreach ($animals as $animal){
                    ?>
                    <tr>
                        <td><?php echo $animal->name ?></td>
                        <td><?php echo $animal->type?></td>
                        <td><?php echo $animal->age ?></td>
                    </tr>
               <?php } ?>

            </tbody>

        </table>


    </div>
</body>

</html>