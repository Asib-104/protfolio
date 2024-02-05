<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

<h2>Simple Calculator</h2>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Enter first number:
    <input type="text" name="num1" required>
    <br>

    Enter second number:
    <input type="text" name="num2" required>
    <br>

    <input type="submit" name="operation" value="+">
    <input type="submit" name="operation" value="-">
    <input type="submit" name="operation" value="*">
    <input type="submit" name="operation" value="/">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    
    if (!is_numeric($num1) || !is_numeric($num2)) {
        echo "Please enter valid numbers.";
    } else {
        
        switch ($operation) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "Cannot divide by zero.";
                }
                break;
            default:
                echo "Invalid operation.";
                break;
        }

     
        if (isset($result)) {
            echo "Result: $result";
        }
    }
}
?>

</body>
</html>
