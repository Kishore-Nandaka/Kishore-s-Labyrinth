<!DOCTYPE html>
<html>
<head>
	<title>PHP Calculator</title>
</head>
<body>

<?php
if(isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    switch($operator) {
        case "+":
            $result = $num1 + $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        case "/":
            if($num2 == 0) {
                $result = "Cannot divide by zero";
            } else {
                $result = $num1 / $num2;
            }
            break;
        default:
            $result = "Invalid operator";
    }

    echo "<h3>Result: $result</h3>";
}
?>

<form method="post" action="">
	<label for="num1">Number 1:</label>
	<input type="number" name="num1" required><br><br>

	<label for="num2">Number 2:</label>
	<input type="number" name="num2" required><br><br>

	<label for="operator">Operator:</label>
	<select name="operator" required>
		<option value="">Select an operator</option>
		<option value="+">Addition</option>
		<option value="-">Subtraction</option>
		<option value="*">Multiplication</option>
		<option value="/">Division</option>
	</select><br><br>

	<input type="submit" name="submit" value="Calculate">
</form>

</body>
</html>