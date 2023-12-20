<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["clear"])) {
        $result = "";
    } elseif (isset($_POST["number"])) {
        $result .= $_POST["number"];
    } elseif (isset($_POST["operator"])) {
        $result .= " " . $_POST["operator"] . " ";
    } elseif (isset($_POST["decimal"])) {
        $result .= ".";
    } elseif (isset($_POST["calculate"])) {
        try {
            // Using eval for simplicity (not recommended for real-world applications)
            eval('$result = ' . $result . ';');
        } catch (Throwable $e) {
            $result = "Error";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>

<body>

    <div class="calculator">
        <form action="" method="post">
            <input type="text" name="display" id="display" value="<?= isset($result) ? $result : '' ?>" readonly>
            <div class="buttons">
                <button type="submit" name="clear">C</button>
                <button type="submit" name="operator" value="/">/</button>
                <button type="submit" name="operator" value="*">*</button>
                <button type="submit" name="number" value="7">7</button>
                <button type="submit" name="number" value="8">8</button>
                <button type="submit" name="number" value="9">9</button>
                <button type="submit" name="operator" value="-">-</button>
                <button type="submit" name="number" value="4">4</button>
                <button type="submit" name="number" value="5">5</button>
                <button type="submit" name="number" value="6">6</button>
                <button type="submit" name="operator" value="+">+</button>
                <button type="submit" name="number" value="1">1</button>
                <button type="submit" name="number" value="2">2</button>
                <button type="submit" name="number" value="3">3</button>
                <button type="submit" name="calculate" value="=">=</button>
                <button type="submit" name="number" value="0">0</button>
                <button type="submit" name="decimal" value=".">.</button>
            </div>
        </form>
    </div>


</body>

</html>