<?php
if($_POST['submit'] == "Submit") {
$input = $_POST['number'];
$fact=1;
for($i=$input; $i>=1;$i--) {
$fact = $fact * $i;
}
echo '<br>'. 'The factorial of the number '.$input.' is ' . $fact;
}
?>
<html>
<head>
<title> Factorial Program</title>
</head>
<body>
<form method="POST">
<label>Enter a number</label>
<input type="text" name="number" />
<input type="submit" name="submit" value="Submit" />
</form>

</body>
</html>