<?php
// Include the functions.php file
include_once 'functions.php';

// Assuming you have a form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    // Perform the calculation based on the selected operator
    switch ($operator) {
        case '+':
            $result = add($num1, $num2);
            break;
        case '-':
            $result = subtract($num1, $num2);
            break;
        case '*':
            $result = multiply($num1, $num2);
            break;
        case '/':
            $result = divide($num1, $num2);
            break;
        case '%':
            $result = modulus($num1, $num2);
            break;
        default:
            $result = 'Invalid Operator';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .calculator {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: grid;
            gap: 10px;
            max-width: 300px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input,
        select,
        button {
            width: 100%;
            height: 40px;
            font-size: 18px;
            padding: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        input:disabled {
            background-color: #f1f1f1;
        }

        #result {
            margin-top: 10px;
            font-weight: bold;
        }

        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-color: #f1f1f1;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 18px;
        }

        select:focus {
            outline: none;
        }

        /* Style the selected option */
        select option:checked {
            background-color: #ddd;
        }
    </style>
    <title>Simple Calculator</title>
</head>

<body>
    <div class="calculator">
        <form method="post" action="">
            <label for="num1">Number 1:</label>
            <input type="number" name="num1" id="num1"
                value="<?php echo isset($_POST['num1']) ? $_POST['num1'] : '1'; ?>">

            <label for="operator">Operator:</label>
            <select name="operator" id="operator">
                <option value="+" <?php echo ($operator == '+') ? 'selected' : ''; ?>>+</option>
                <option value="-" <?php echo ($operator == '-') ? 'selected' : ''; ?>>-</option>
                <option value="*" <?php echo ($operator == '*') ? 'selected' : ''; ?>>*</option>
                <option value="/" <?php echo ($operator == '/') ? 'selected' : ''; ?>>/</option>
                <option value="%" <?php echo ($operator == '%') ? 'selected' : ''; ?>>%</option>
            </select>

            <label for="num2">Number 2:</label>
            <input type="number" name="num2" id="num2"
                value="<?php echo isset($_POST['num2']) ? $_POST['num2'] : '2'; ?>">

            <button type="submit" name="calculate">Calculate</button>

            <label for="result">Result:</label>
            <input type="text" id="result" value="<?php echo isset($result) ? $result : ''; ?>" disabled>
        </form>
    </div>
</body>

</html>