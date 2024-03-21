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
                <input type="text" class="form-control" id="animal_name" name="animal_name" required>
            </div>

            <div class="form-group">
                <label for="animal_type">Animal Type:</label>
                <input type="text" class="form-control" id="animal_type" name="animal_type" required>
            </div>

            <div class="form-group">
                <label for="animal_age">Animal Age:</label>
                <input type="number" class="form-control" id="animal_age" name="animal_age" required>
            </div>

            <!-- Add more fields for other attributes of the Animal class here -->

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="?save" class="btn btn-success">Save Animals</a>
        </form>
    </div>
</body>
</html>