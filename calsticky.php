<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

<h2>Simple Calculator</h2>

<form action="result.php" method="POST">
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

</body>
</html>
