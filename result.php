<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    // Validate input
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
                    exit; 
                }
                break;
            default:
                echo "Invalid operation.";
                exit;
        }

        
        echo "Result: $result";
    }
} else {
    echo "Invalid access to this page.";
}
?>

</body>
</html>
